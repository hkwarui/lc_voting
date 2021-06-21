<x-app-layout>
  <div class="filters flex space-x-6">
    <div class="w-1/3">
      <select name="category" id="category" class="w-full rounded-xl border-none py-2 px-4">
        <option value="categoryOne">Category One</option>
        <option value="categoryTwo">Category Two</option>
        <option value="categoryThree">Category Three</option>
        <option value="categoryFour">Category Four</option>
     </select>
    </div>

     <div class="w-1/3">
      <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none py-2 px-4">
        <option value="filter one ">filter  One</option>
        <option value="filter Two">filter Two</option>
        <option value="filter Three">filter Three</option>
        <option value="filter four">filter Four</option>
     </select>
    </div>

    <div class="w-2/3 relative">
        <input type="search" class="w-full rounded-xl border-none placeholder-text-gray-900  px-4 py-2 pl-8 " placeholder="Find an idea">
        <div class="absolute top-0 items-center h-full flex ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

  </div> <!-- end filters -->
</x-app-layout>