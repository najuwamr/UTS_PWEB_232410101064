<div id="add-list" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg w-full max-w-2xl md:max-w-xl sm:max-w-sm relative text-ungu-gelap">
        <button onclick="document.getElementById('add-list').classList.add('hidden')"
            class="absolute top-2 right-2 text-ungu-gelap hover:text-[#261D19] text-2xl">×</button>

        <h2 class="text-xl font-bold mb-6">Add New List</h2>

        <form action="{{ route('anime.add') }}?username={{ $username }}" method="POST" class="space-y-4">
            @csrf
            <div class="flex gap-4 items-start">
                <div class="w-2/3">
                    <label for="imageUrl" class="block font-medium mb-1">Image Link (URL)</label>
                    <input type="url" id="imageUrl" name="imageUrl"
                    placeholder="https://anime-example.com/your-anime-cover.jpg" class="w-full p-2 border rounded" />
                </div>
                <div class="w-1/3">
                    <p class="text-sm mb-1 font-medium">Preview</p>
                    <img id="imagePreview" src="" alt="" class="w-full h-40 border rounded object-contain" />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="title" class="block font-medium mb-1">Anime Title</label>
                    <input type="text" name="title" placeholder="Title" class="w-full p-2 border rounded" required />
                </div>
                <div>
                    <label for="studio" class="block font-medium mb-1">Studio</label>
                    <input type="text" name="studio" placeholder="Studio name" class="w-full p-2 border rounded" required />
                </div>
                <div>
                    <label for="genre" class="block font-medium mb-1">Genre</label>
                    <input type="text" name="genre" placeholder="Type genres" class="w-full p-2 border rounded" required />
                </div>
                <div>
                    <label for="score" class="block font-medium mb-1">Score</label>
                    <input type="number" name="score" min="1" max="100" placeholder="1 - 100" class="w-full p-2 border rounded" required />
                </div>
                <div>
                    <label for="status" class="block font-medium mb-1">Status</label>
                    <select name="status" id="status" class="w-full p-2 border rounded" required>
                    <option value=""></option>
                    <option value="To Watch">To Watch</option>
                    <option value="Watching">Watching</option>
                    <option value="Finish">Finish</option>
                    <option value="Rewatching">Rewatching</option>
                    <option value="Dropped">Dropped</option>
                    </select>
                </div>
                <div>
                    <label for="notes" class="block font-medium mb-1">Notes</label>
                    <textarea name="notes" placeholder="Sugoiii" class="w-full p-2 border rounded"></textarea>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-ungu-normal text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    const imageUrlInput = document.getElementById('imageUrl');
    const imagePreview = document.getElementById('imagePreview');

    imageUrlInput.addEventListener('input', function () {
    imagePreview.src = imageUrlInput.value;
    });
</script>
