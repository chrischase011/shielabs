<section class="w-full p-10">
    <h1 class="text-2xl font-bold">Featured Products</h1>

    {{-- Sort and Column View --}}
    <div class="w-full my-10">
        <div class="grid grid-cols-2">
            <div class="flex flex-row items-center space-x-3">
                <button
                    class="w-auto px-5 font-semibold text-white transition ease-linear bg-gray-400 border border-gray-900 rounded-full featured-active hover:bg-gray-500">All</button>
                <button
                    class="w-auto px-5 font-semibold text-white transition ease-linear bg-gray-400 border border-gray-900 rounded-full hover:bg-gray-500">Men</button>
                <button
                    class="w-auto px-5 font-semibold text-white transition ease-linear bg-gray-400 border border-gray-900 rounded-full hover:bg-gray-500">Women</button>
                <button
                    class="w-auto px-5 font-semibold text-white transition ease-linear bg-gray-400 border border-gray-900 rounded-full hover:bg-gray-500">Others</button>
            </div>
            <div x-data="{ showCols: '' }" class="flex flex-row items-center justify-end space-x-4">
                <label>
                    Show Columns by:
                </label>

                <select class="w-auto" x-model="showCols" x-on:change="showCol($event)">
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                </select>

                <button
                    class="w-auto px-5 transition ease-linear delay-100 bg-white border border-gray-900 rounded-full  hover:bg-gray-400 h-11"><i
                        class="mr-3 fa-solid fa-sort"></i>Sort</button>
            </div>
        </div>
    </div>
    <script>
        function showCol(event) {
            const val = event.target.value
            console.log(val);
        }
    </script>

    {{-- Products --}}
    <div id="products" class="w-full my-10">

    </div>


</section>
