<div
   
    class="flex justify-center my-5 px-8">
    <form class="max-w-xl" wire:submit="save">
        <div class="flex flex-wrap border shadow rounded-lg p-3 dark:bg-gray-600">
            <h2 class="text-xl text-gray-600 dark:text-gray-300 pb-2">Create Podcast</h2>

            <div class="flex flex-col gap-2 w-full border-gray-400">

                <div>
                    <label class="text-gray-600 dark:text-gray-400">
                        Title
                    </label>
                    <input
                        value="{{$title ?? null}}"
                        wire:model="title"
                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow dark:bg-gray-600 dark:text-gray-100"
                        type="text">
                    <div>
                        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                </div>


              
                <div>
                    <label class="text-gray-600 dark:text-gray-400">Description</label>
                    <textarea
                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow dark:bg-gray-600 dark:text-gray-100"
                        wire:model="description"></textarea>
                    <div>
                        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="flex justify-end">
                    <button
                        class="py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700"
                        type="submit">Create</button>
                </div>
            </div>
        </div>
    </form>
</div>