@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 p-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <div class="max-w-5xl mx-auto">

        {{-- Header --}}
        <div class="text-center mb-8">
            <h1 class="text-6xl font-bold text-gray-900 mb-1" style="font-family:'Poppins',sans-serif">Wernoin Color</h1>
            <h1 class="text-6xl font-bold text-gray-900 mb-4" style="font-family:'Poppins',sans-serif">Generator</h1>
            <p class="text-gray-600">Enter up to 3 colors — they'll be blended into one smooth 11-swatch palette</p>
        </div>

        {{-- Color Inputs --}}
        <div class="mb-10">
            <div class="max-w-md mx-auto" id="colorInputsWrap"></div>
            <div class="flex justify-center mt-4" id="addColorBtnWrap">
                <button id="addColorBtn" class="text-gray-500 flex items-center gap-1 hover:text-gray-700 transition-colors text-sm px-4 py-2 rounded-full border border-gray-300 hover:border-gray-400 bg-white">
                    <span class="text-lg leading-none">+</span>
                    <span id="addColorBtnLabel">Add secondary color</span>
                </button>
            </div>
        </div>

        {{-- Single blended palette --}}
        <div id="paletteSection" class="mb-12 hidden">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center gap-3">
                    <div id="colorDots" class="flex gap-1"></div>
                    <h2 class="text-2xl font-semibold text-gray-900" id="paletteName">Blended Palette</h2>
                </div>
                <div class="flex gap-3">
                    <button onclick="exportPalette()" class="px-4 py-2 text-gray-600 hover:text-gray-900 transition-colors">Export CSS</button>
                    <button class="px-4 py-2 bg-gray-900 text-white rounded-md hover:bg-gray-800 transition-colors">Save</button>
                </div>
            </div>

            {{-- Loading bar --}}
            <div id="loadingBar" class="hidden mb-4">
                <div class="h-1 w-full bg-gray-200 rounded-full overflow-hidden">
                    <div class="h-1 rounded-full animate-loading-bar"></div>
                </div>
                <p class="text-xs text-gray-400 mt-1 text-center" id="loadingText">Fetching palette…</p>
            </div>

            {{-- Always 11 columns --}}
            <div class="grid gap-2" id="paletteGrid" style="grid-template-columns:repeat(11,1fr)"></div>
            <div id="paletteLegend" class="flex gap-6 mt-4 justify-center text-xs text-gray-500"></div>
        </div>

        {{-- Related Colors --}}
        <div class="mt-16">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-2">Related colours</h2>
                    <p class="text-gray-600">A recommended colour that are related to the previous palettes.</p>
                </div>
                <button class="text-gray-900 font-medium hover:text-gray-700 transition-colors">See More</button>
            </div>
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-16 rounded-lg mb-4 bg-gradient-to-r from-[#ffcdd2] to-[#f48fb1]"></div>
                    <p class="text-gray-800 mb-4 font-medium">Ideal for a soft and calming interface.</p>
                    <div class="text-xs font-medium uppercase tracking-wide text-gray-400 mb-1">Purpose</div>
                    <div class="text-gray-600">Soft &amp; Calming</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-16 rounded-lg mb-4 bg-gradient-to-r from-[#e1bee7] to-[#ce93d8]"></div>
                    <p class="text-gray-800 mb-4 font-medium">Ideal for a gentle and soothing interface.</p>
                    <div class="text-xs font-medium uppercase tracking-wide text-gray-400 mb-1">Purpose</div>
                    <div class="text-gray-600">Gentle</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-16 rounded-lg mb-4 bg-gradient-to-r from-[#ffcdd2] to-[#90caf9]"></div>
                    <p class="text-gray-800 mb-4 font-medium">Perfect for a calm and professional interface.</p>
                    <div class="text-xs font-medium uppercase tracking-wide text-gray-400 mb-1">Purpose</div>
                    <div class="text-gray-600">Calm &amp; Professional</div>
                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const MAX_COLORS = 3;
        const TOTAL_SWATCHES = 11; // always fixed
        const LABELS = ['Primary', 'Secondary', 'Tertiary'];

        // State: { hex, name, rawPalette: [{hex},...] | null }
        const colors = [{
            hex: '#EB3DAE'
            , name: ''
            , rawPalette: null
        }];

        const inputsWrap = document.getElementById('colorInputsWrap');
        const addBtn = document.getElementById('addColorBtn');
        const addBtnLabel = document.getElementById('addColorBtnLabel');
        const addBtnWrap = document.getElementById('addColorBtnWrap');
        const paletteSection = document.getElementById('paletteSection');
        const paletteGrid = document.getElementById('paletteGrid');
        const paletteName = document.getElementById('paletteName');
        const colorDots = document.getElementById('colorDots');
        const paletteLegend = document.getElementById('paletteLegend');
        const loadingBar = document.getElementById('loadingBar');
        const loadingText = document.getElementById('loadingText');

        // ── Utilities ───────────────────────────────────────────
        function debounce(fn, ms) {
            let t;
            return (...a) => {
                clearTimeout(t);
                t = setTimeout(() => fn(...a), ms);
            };
        }

        function isValidHex(h) {
            return /^#[0-9a-fA-F]{6}$/.test(h);
        }

        function hexToRgb(hex) {
            const n = parseInt(hex.replace('#', ''), 16);
            return [(n >> 16) & 255, (n >> 8) & 255, n & 255];
        }

        function rgbToHex(r, g, b) {
            return '#' + [r, g, b]
                .map(v => Math.round(Math.max(0, Math.min(255, v))).toString(16).padStart(2, '0'))
                .join('');
        }

        function lerp(a, b, t) {
            return a + (b - a) * t;
        }

        function showNotification(msg) {
            const el = document.createElement('div');
            el.textContent = msg;
            el.className = 'fixed bottom-4 right-4 bg-gray-900 text-white px-6 py-3 rounded-full text-sm font-medium shadow-lg z-50';
            el.style.animation = 'fadeInOut 2s ease forwards';
            document.body.appendChild(el);
            setTimeout(() => el.remove(), 2000);
        }

        // ── Blend: always produce exactly TOTAL_SWATCHES colors ─
        // Anchors are the representative hex of each selected color's
        // raw palette (we use the palette array itself as color stops).
        // We spread TOTAL_SWATCHES evenly across all anchors.
        function buildBlendedPalette() {
            const ready = colors.filter(c => c.rawPalette && c.rawPalette.length);
            if (!ready.length) return [];

            // Build a flat list of anchor hex values from all palettes.
            // Each rawPalette has N swatches; we use them as gradient stops.
            // Concatenate all into one ordered list, then sample TOTAL_SWATCHES evenly.
            const allStops = ready.flatMap(c => c.rawPalette.map(s => s.hex));
            // allStops might be e.g. 11, 22, or 33 items — we resample to exactly 11

            const result = [];
            for (let i = 0; i < TOTAL_SWATCHES; i++) {
                const t = i / (TOTAL_SWATCHES - 1); // 0..1
                const pos = t * (allStops.length - 1); // position in allStops
                const lo = Math.floor(pos);
                const hi = Math.min(lo + 1, allStops.length - 1);
                const frac = pos - lo;

                const rgbLo = hexToRgb(allStops[lo]);
                const rgbHi = hexToRgb(allStops[hi]);

                result.push(rgbToHex(
                    lerp(rgbLo[0], rgbHi[0], frac)
                    , lerp(rgbLo[1], rgbHi[1], frac)
                    , lerp(rgbLo[2], rgbHi[2], frac)
                , ));
            }
            return result;
        }

        // ── Render palette ──────────────────────────────────────
        function renderPalette() {
            const swatches = buildBlendedPalette();
            if (!swatches.length) {
                paletteSection.classList.add('hidden');
                return;
            }

            paletteSection.classList.remove('hidden');

            const ready = colors.filter(c => c.rawPalette);

            // Title
            paletteName.textContent = ready.length === 1 ?
                (ready[0].name || 'Color Palette') :
                ready.map(c => c.name).filter(Boolean).join(' × ') || 'Blended Palette';

            // Dots
            colorDots.innerHTML = ready.map(c =>
                `<div class="w-4 h-4 rounded-full border border-white shadow-sm" style="background:${c.hex}"></div>`
            ).join('');

            // Legend
            paletteLegend.innerHTML = ready.map((c, i) =>
                `<span class="flex items-center gap-1">
                <span class="inline-block w-2 h-2 rounded-full" style="background:${c.hex}"></span>
                ${LABELS[i]}: ${c.hex.toUpperCase()}
            </span>`
            ).join('');

            // Swatches — grid always has 11 columns (set in HTML)
            paletteGrid.innerHTML = '';
            swatches.forEach(hex => {
                const block = document.createElement('div');
                block.style.backgroundColor = hex;
                block.className = 'aspect-square relative group cursor-pointer transition-all duration-300 rounded-xl hover:shadow-lg hover:scale-105 hover:z-10';
                block.innerHTML = `
                <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-gradient-to-b from-transparent to-black/30"></div>
                <div class="absolute bottom-2 left-0 right-0 text-center font-medium text-white opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-1 group-hover:translate-y-0" style="font-size:9px">${hex.toUpperCase()}</div>
            `;
                block.addEventListener('click', e => {
                    navigator.clipboard.writeText(hex).then(() => showNotification('Copied ' + hex));
                    const ripple = document.createElement('div');
                    ripple.className = 'absolute bg-white rounded-full opacity-30 pointer-events-none';
                    ripple.style.animation = 'ripple 1s linear';
                    const rect = block.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height) * 2;
                    Object.assign(ripple.style, {
                        width: size + 'px'
                        , height: size + 'px'
                        , left: (e.clientX - rect.left - size / 2) + 'px'
                        , top: (e.clientY - rect.top - size / 2) + 'px'
                    , });
                    block.appendChild(ripple);
                    setTimeout(() => ripple.remove(), 1000);
                });
                paletteGrid.appendChild(block);
            });
        }

        // ── Fetch raw palette for one index ─────────────────────
        let pendingCount = 0;

        function fetchPalette(index) {
            const entry = colors[index];
            if (!isValidHex(entry.hex)) return;

            entry.rawPalette = null;
            pendingCount++;
            loadingBar.classList.remove('hidden');
            loadingText.textContent = `Fetching palette…`;

            fetch('/generate-palette', {
                    method: 'POST'
                    , headers: {
                        'Content-Type': 'application/json'
                        , 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    , }
                    , body: JSON.stringify({
                        color: entry.hex
                    })
                , })
                .then(res => {
                    if (!res.ok) throw new Error('HTTP ' + res.status);
                    return res.json();
                })
                .then(data => {
                    if (data.error) throw new Error(data.error);
                    entry.name = data.colorName || '';
                    entry.rawPalette = Array.isArray(data.palette) ? data.palette : [];
                    renderPalette();
                })
                .catch(err => {
                    console.error('Palette error:', err);
                    showNotification('Failed to fetch palette for ' + entry.hex);
                })
                .finally(() => {
                    pendingCount = Math.max(0, pendingCount - 1);
                    if (!pendingCount) loadingBar.classList.add('hidden');
                });
        }

        const debouncedFetch = debounce(fetchPalette, 350);

        // ── Input row builder ────────────────────────────────────
        function buildRow(index) {
            const hex = colors[index].hex;
            const row = document.createElement('div');
            row.dataset.index = index;
            row.innerHTML = `
            <div class="bg-white rounded-full border shadow-sm overflow-hidden flex items-center p-1 mb-3">
                <div class="w-10 h-10 rounded-full ml-1 relative flex-shrink-0" style="background:${hex}">
                    <input type="color" value="${hex}"
                        class="absolute inset-0 opacity-0 cursor-pointer w-full h-full rounded-full">
                </div>
                <input type="text" value="${hex}" placeholder="${hex}"
                    class="flex-1 px-4 py-2 focus:outline-none text-gray-700 text-sm min-w-0">
                <span class="text-xs font-medium text-gray-400 mr-2 uppercase tracking-wide flex-shrink-0">${LABELS[index]}</span>
                ${index > 0 ? `<button class="remove-btn text-gray-300 hover:text-red-400 transition-colors mr-2 text-xl leading-none flex-shrink-0" title="Remove">&times;</button>` : ''}
            </div>
        `;

            const preview = row.querySelector('[style]');
            const picker = row.querySelector('input[type=color]');
            const textIn = row.querySelector('input[type=text]');

            picker.addEventListener('input', e => {
                preview.style.background = e.target.value;
                textIn.value = e.target.value;
            });
            picker.addEventListener('change', e => {
                colors[index].hex = e.target.value;
                debouncedFetch(index);
            });
            textIn.addEventListener('input', e => {
                let v = e.target.value.trim();
                if (v.length === 6 && !v.startsWith('#')) {
                    v = '#' + v;
                    e.target.value = v;
                }
                if (isValidHex(v)) {
                    preview.style.background = v;
                    picker.value = v;
                    colors[index].hex = v;
                    debouncedFetch(index);
                }
            });
            textIn.addEventListener('keydown', e => {
                if (e.key === 'Enter') {
                    const v = e.target.value.trim();
                    if (isValidHex(v)) {
                        colors[index].hex = v;
                        fetchPalette(index);
                    } else alert('Please enter a valid hex color (e.g. #FF5733)');
                }
            });
            if (index > 0) {
                row.querySelector('.remove-btn').addEventListener('click', () => removeColor(index));
            }
            return row;
        }

        function rebuildRows() {
            inputsWrap.innerHTML = '';
            colors.forEach((_, i) => inputsWrap.appendChild(buildRow(i)));
            updateAddBtn();
        }

        function updateAddBtn() {
            if (colors.length >= MAX_COLORS) {
                addBtnWrap.classList.add('hidden');
                return;
            }
            addBtnWrap.classList.remove('hidden');
            addBtnLabel.textContent = colors.length === 1 ? 'Add secondary color' : 'Add tertiary color';
        }

        // ── Add / Remove ─────────────────────────────────────────
        addBtn.addEventListener('click', () => {
            if (colors.length >= MAX_COLORS) return;
            const defaults = ['#3D9AEB', '#3DEB8A'];
            colors.push({
                hex: defaults[colors.length - 1] || '#888888'
                , name: ''
                , rawPalette: null
            });
            rebuildRows();
            fetchPalette(colors.length - 1);
        });

        function removeColor(index) {
            colors.splice(index, 1);
            rebuildRows();
            renderPalette();
        }

        // ── Export CSS ───────────────────────────────────────────
        window.exportPalette = function() {
            const swatches = buildBlendedPalette();
            if (!swatches.length) return;
            const ready = colors.filter(c => c.rawPalette);
            const prefix = ready.length === 1 ?
                (ready[0].name || 'color').toLowerCase().replace(/\s+/g, '-') :
                'blend';
            const lines = [`/* Wernoin — ${paletteName.textContent} */`];
            swatches.forEach((hex, i) => lines.push(`--color-${prefix}-${(i + 1) * 100}: ${hex};`));
            navigator.clipboard.writeText(lines.join('\n'))
                .then(() => showNotification('CSS variables copied!'));
        };

        // ── Init ─────────────────────────────────────────────────
        rebuildRows();
        fetchPalette(0);
    });

</script>

<style>
    @keyframes ripple {
        from {
            transform: scale(0);
            opacity: 0.4;
        }

        to {
            transform: scale(1);
            opacity: 0;
        }
    }

    @keyframes fadeInOut {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        10% {
            opacity: 1;
            transform: translateY(0);
        }

        90% {
            opacity: 1;
            transform: translateY(0);
        }

        100% {
            opacity: 0;
            transform: translateY(-20px);
        }
    }

    @keyframes loadingBar {
        0% {
            width: 5%;
            background: #EB3DAE;
        }

        50% {
            width: 85%;
            background: #3D9AEB;
        }

        100% {
            width: 5%;
            background: #3DEB8A;
        }
    }

    .animate-loading-bar {
        animation: loadingBar 1.6s ease-in-out infinite;
    }

</style>
@endpush
@endsection
