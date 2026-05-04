@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 p-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <div class="max-w-5xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-6xl font-bold text-gray-900 mb-1 font-poppins">Colorify Color</h1>
            <h1 class="text-6xl font-bold text-gray-900 mb-4 font-poppins">Generator</h1>
            <p class="text-gray-600">Press spacebar, enter a hexcode or change the HSL</p>
            <p class="text-gray-600">values to create a custom color scale</p>
        </div>

        <!-- Color Input -->
        <div class="mb-10">
            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-full border shadow-sm overflow-hidden flex items-center p-1">
                    <div class="w-10 h-10 rounded-full ml-1 relative" id="colorPreview" style="background-color: #EB3DAE">
                        <input type="color" 
                               id="colorPicker"
                               class="absolute inset-0 opacity-0 cursor-pointer w-full h-full"
                               value="#EB3DAE">
                    </div>
                    <input type="text" 
                           id="colorInput"
                           class="flex-1 px-4 py-2 focus:outline-none text-gray-700"
                           placeholder="#EB3DAE"
                           value="#EB3DAE">
                    <div id="loadingSpinner" class="hidden mr-4">
                        <div class="relative w-6 h-6">
                            <div class="absolute top-0 left-0 w-6 h-6 rounded-full border-2 border-t-transparent animate-loading animate-color-change"></div>
                        </div>
                    </div>
                </div>
                <button class="mt-4 text-gray-500 flex items-center justify-center mx-auto hover:text-gray-700 transition-colors">
                    <span class="mr-2">+</span> Add secondary color
                </button>
            </div>
        </div>

        <!-- Color Palette Section -->
        <div class="mb-12">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-900" id="colorName">Bubblegum Pink</h2>
                <div class="flex gap-4">
                    <button class="px-4 py-2 text-gray-600 hover:text-gray-900 transition-colors">Export</button>
                    <button class="px-4 py-2 bg-gray-900 text-white rounded-md hover:bg-gray-800 transition-colors">Save</button>
                </div>
            </div>
            <div class="grid grid-cols-11 gap-2" id="colorPalette">
                <!-- Color blocks will be generated here -->
            </div>
        </div>

        <!-- Related Colors Section -->
        <div class="mt-16">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-2">Related colours</h2>
                    <p class="text-gray-600">A recommended colour that are related to the previous palletes.</p>
                </div>
                <button class="text-gray-900 font-medium hover:text-gray-700 transition-colors">See More</button>
            </div>
            
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-16 rounded-lg mb-4 bg-gradient-to-r from-[#ffcdd2] to-[#f48fb1]"></div>
                    <p class="text-gray-800 mb-4 font-medium">These colors are ideal for creating a soft and calming interface.</p>
                    <div class="text-gray-600">
                        <div class="text-sm font-medium uppercase tracking-wide text-gray-400 mb-1">Purpose</div>
                        <div>Soft & Calming</div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-16 rounded-lg mb-4 bg-gradient-to-r from-[#e1bee7] to-[#ce93d8]"></div>
                    <p class="text-gray-800 mb-4 font-medium">These colors are ideal for a gentle and soothing interface.</p>
                    <div class="text-gray-600">
                        <div class="text-sm font-medium uppercase tracking-wide text-gray-400 mb-1">Purpose</div>
                        <div>Gentle</div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-16 rounded-lg mb-4 bg-gradient-to-r from-[#ffcdd2] to-[#90caf9]"></div>
                    <p class="text-gray-800 mb-4 font-medium">These colors are perfect for a calm and professional interface.</p>
                    <div class="text-gray-600">
                        <div class="text-sm font-medium uppercase tracking-wide text-gray-400 mb-1">Purpose</div>
                        <div>Calm & Professional</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const colorInput = document.getElementById('colorInput');
    const colorPreview = document.getElementById('colorPreview');
    const colorPicker = document.getElementById('colorPicker');
    const colorNameElement = document.getElementById('colorName');
    const loadingSpinner = document.getElementById('loadingSpinner');

    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    function setLoading(isLoading) {
        if (isLoading) {
            loadingSpinner.classList.remove('hidden');
            colorInput.disabled = true;
            colorPicker.disabled = true;
        } else {
            loadingSpinner.classList.add('hidden');
            colorInput.disabled = false;
            colorPicker.disabled = false;
        }
    }

    function updatePreview(color) {
        colorInput.value = color;
        colorPreview.style.backgroundColor = color;
        colorPicker.value = color;
    }

    function handlePaletteData(data) {
        setLoading(false);

        if (data.error) {
            alert(data.error);
            return;
        }

        if (data.colorName) {
            colorNameElement.textContent = data.colorName;
        }

        const paletteContainer = document.getElementById('colorPalette');
        paletteContainer.innerHTML = '';

        if (Array.isArray(data.palette)) {
            data.palette.forEach(item => {
                const colorBlock = document.createElement('div');
                colorBlock.style.backgroundColor = item.hex;
                colorBlock.classList.add(
                    'aspect-square', 
                    'relative', 
                    'group',
                    'cursor-pointer',
                    'transition-all',
                    'duration-300',
                    'rounded-xl',
                    'hover:shadow-lg',
                    'hover:scale-105',
                    'hover:z-10'
                );
                
                // Tambahkan overlay gradient
                const overlay = document.createElement('div');
                overlay.classList.add(
                    'absolute',
                    'inset-0',
                    'rounded-xl',
                    'opacity-0',
                    'group-hover:opacity-100',
                    'transition-opacity',
                    'duration-300',
                    'bg-gradient-to-b',
                    'from-transparent',
                    'to-black/30'
                );
                
                const colorInfo = document.createElement('div');
                colorInfo.classList.add(
                    'absolute',
                    'bottom-3',
                    'left-0',
                    'right-0',
                    'text-center',
                    'text-sm',
                    'font-medium',
                    'text-white',
                    'opacity-0',
                    'group-hover:opacity-100',
                    'transition-all',
                    'duration-300',
                    'transform',
                    'group-hover:translate-y-0',
                    'translate-y-2'
                );

                colorInfo.textContent = item.hex.toUpperCase();
                
                colorBlock.appendChild(overlay);
                colorBlock.appendChild(colorInfo);
                
                // Tambahkan efek ripple saat diklik
                colorBlock.addEventListener('click', (e) => {
                    const ripple = document.createElement('div');
                    ripple.classList.add(
                        'absolute',
                        'bg-white',
                        'rounded-full',
                        'animate-ripple',
                        'opacity-30'
                    );
                    
                    const rect = colorBlock.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    ripple.style.width = ripple.style.height = `${size * 2}px`;
                    ripple.style.left = `${e.clientX - rect.left - size}px`;
                    ripple.style.top = `${e.clientY - rect.top - size}px`;
                    
                    colorBlock.appendChild(ripple);
                    
                    navigator.clipboard.writeText(item.hex).then(() => {
                        showNotification('Color copied!');
                    });
                    
                    setTimeout(() => ripple.remove(), 1000);
                });
                
                paletteContainer.appendChild(colorBlock);
            });
        }
    }

    // Fungsi helper untuk menampilkan notifikasi
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.textContent = message;
        notification.classList.add(
            'fixed',
            'bottom-4',
            'right-4',
            'bg-gray-900',
            'text-white',
            'px-6',
            'py-3',
            'rounded-full',
            'text-sm',
            'font-medium',
            'shadow-lg',
            'z-50',
            'animate-fade-in-out'
        );
        document.body.appendChild(notification);
        setTimeout(() => notification.remove(), 2000);
    }

    const generatePalette = debounce((color) => {
        if (!/^#[a-fA-F0-9]{6}$/.test(color)) {
            alert('Please enter a valid hex color code.');
            return;
        }

        setLoading(true);

        fetch(`/generate-palette`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({ color: color })
        })
        .then(response => response.json())
        .then(handlePaletteData)
        .catch(error => {
            setLoading(false);
            console.error('Error:', error);
            alert('An error occurred while generating the palette.');
        });
    }, 300);

    // Event Listeners
    colorPicker.addEventListener('input', (e) => {
        updatePreview(e.target.value);
    });

    colorPicker.addEventListener('change', (e) => {
        const color = e.target.value;
        updatePreview(color);
        generatePalette(color);
    });

    colorInput.addEventListener('input', (e) => {
        let color = e.target.value.trim();
        if (color.length === 6 && !color.startsWith('#')) {
            color = '#' + color;
            e.target.value = color;
        }
        if (color.length === 7) {
            updatePreview(color);
            generatePalette(color);
        }
    });

    colorInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            generatePalette(e.target.value.trim());
        }
    });

    // Initialize with default color
    generatePalette('#EB3DAE');
});
</script>

<style>
@keyframes loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes colorChange {
    0% { border-color: #ff0080; border-top-color: transparent; }
    20% { border-color: #00b7ff; border-top-color: transparent; }
    40% { border-color: #00ff00; border-top-color: transparent; }
    60% { border-color: #ff00ff; border-top-color: transparent; }
    80% { border-color: #ffe600; border-top-color: transparent; }
    100% { border-color: #ff0080; border-top-color: transparent; }
}

.animate-loading {
    animation: loading 1s linear infinite;
}

.animate-color-change {
    animation: loading 1s linear infinite, colorChange 4s linear infinite;
}
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

.animate-ripple {
    animation: ripple 1s linear;
}

@keyframes fadeInOut {
    0% { opacity: 0; transform: translateY(20px); }
    10% { opacity: 1; transform: translateY(0); }
    90% { opacity: 1; transform: translateY(0); }
    100% { opacity: 0; transform: translateY(-20px); }
}
</style>
@endpush
@endsection