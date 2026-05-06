<!-- Save Palette Modal -->
<div id="savePaletteModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 items-center justify-center p-4" style="display: none;">
    <div class="bg-white rounded-2xl shadow-xl max-w-md w-full p-6">
        <!-- Header -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-900">Save Palette</h2>
            <p class="text-sm text-gray-500 mt-1">Give your palette a name and choose a collection</p>
        </div>

        <!-- Form -->
        <form id="savePaletteForm" class="space-y-4">
            <!-- Palette Name -->
            <div>
                <label for="paletteNameInput" class="block text-sm font-medium text-gray-700 mb-2">
                    Palette Name
                </label>
                <input type="text" id="paletteNameInput" placeholder="e.g., Summer Vibes" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all" required>
                <p class="text-xs text-gray-500 mt-1" id="paletteNameError"></p>
            </div>

            <!-- Collection Selection -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Collection
                </label>
                <div class="space-y-2" id="collectionOptions">
                    <p class="text-sm text-gray-500 py-2">Loading collections...</p>
                </div>
            </div>

            <!-- New Collection Name (Hidden by default) -->
            <div id="newCollectionDiv" class="hidden">
                <label for="newCollectionName" class="block text-sm font-medium text-gray-700 mb-2">
                    Collection Name
                </label>
                <input type="text" id="newCollectionName" placeholder="e.g., My Color Schemes" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-900 focus:border-transparent outline-none transition-all">
            </div>

            <!-- Palette Preview -->
            <div id="palettePreview" class="mt-6 p-3 bg-gray-50 rounded-lg">
                <p class="text-xs text-gray-500 mb-2">Preview</p>
                <div id="previewColors" class="flex gap-1 h-8 rounded overflow-hidden">
                    <!-- Colors will be inserted here -->
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-3 mt-8">
                <button type="button" onclick="closeSavePaletteModal()" class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium">
                    Cancel
                </button>
                <button type="submit" class="flex-1 px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors font-medium" id="savePaletteBtn">
                    Save Palette
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    .collection-option {
        padding: 0.75rem;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
        cursor: pointer;
        transition: all 0.2s;
    }

    .collection-option:hover {
        background-color: #f3f4f6;
    }

    .collection-option.selected {
        border-color: #1f2937;
        background-color: #f3f4f6;
    }

    .collection-option input[type="radio"] {
        margin-right: 0.5rem;
        cursor: pointer;
    }

</style>
