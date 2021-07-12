<x-app-layout>

    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none text-xs px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other-filters" id="other-filters" class="w-full rounded-xl border-none text-xs px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            
            <input type="search" placeholder="Find a idea" class="w-full rounded-xl bg-white border-none text-xs px-4 py-2 pl-8 placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-900" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
            </div>
        </div>
    </div> <!-- end filters -->
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-lg cursor-pointer transition duration-150 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div> 
                </div>
                <div class="mt-8">
                    <button class="w-20 bold bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold uppercase text-xxs rounded-xl px-4 transition duration-150 ease-in py-3 ">Vote</button>
                </div>
            </div> 
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none ">
                    <a href="#" class="flex-none ">
                        <img src="https://source.unsplash.com/203x203/?face&crop=face&v1" alt="avatar" class ="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl semibold">
                        <a href="#" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores reiciendis at voluptatem eveniet, ipsam libero eum provident, aliquam id ullam! Expedita ea dolore corrupti dolores amet iste aperiam quaerat deleniti soluta. Doloremque accusamus dolore atque labore, impedit totam facilis quis. Fuga nobis voluptas deleniti hic voluptatum, natus atque, accusantium quas doloremque velit quia enim illo consequuntur ipsam qui reiciendis.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-700">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                            <button class="bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                                  <ul class="absolute w-44 text-left ml-8 font-semibold bg-white shadow-lg rounded-xl py-3">
                                      <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                      <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                  </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
        <div class="idea-container bg-white rounded-xl flex hover:shadow-lg cursor-pointer transition duration-150 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500">Votes</div> 
                </div>
                <div class="mt-8">
                    <button class="w-20 bold bg-blue text-white border border-blue-200 hover:border-blue-hover font-bold uppercase text-xxs rounded-xl px-4 transition duration-150 ease-in py-3 ">Voted</button>
                </div>
            </div> 
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none ">
                    <img src="https://source.unsplash.com/202x202/?face&crop=face&v1" alt="avatar" class ="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl semibold">
                        <a href="#" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores reiciendis at voluptatem eveniet, ipsam libero eum provident, aliquam id ullam! Expedita ea dolore corrupti dolores amet iste aperiam quaerat deleniti soluta. Doloremque accusamus dolore atque labore, impedit totam facilis quis. Fuga nobis voluptas deleniti hic voluptatum, natus atque, accusantium quas doloremque velit quia enim illo consequuntur ipsam qui reiciendis.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-700">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">In Progress</div>
                            <button class="bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7 py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                            </button>
                        </div>                        
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
        <div class="idea-container bg-white rounded-xl flex hover:shadow-lg cursor-pointer transition duration-150 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div> 
                </div>
                <div class="mt-8">
                    <button class="w-20 bold bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold uppercase text-xxs rounded-xl px-4 transition duration-150 ease-in py-3 ">Vote</button>
                </div>
            </div> 
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none ">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v1" alt="avatar" class ="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl semibold">
                        <a href="#" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores reiciendis at voluptatem eveniet, ipsam libero eum provident, aliquam id ullam! Expedita ea dolore corrupti dolores amet iste aperiam quaerat deleniti soluta. Doloremque accusamus dolore atque labore, impedit totam facilis quis. Fuga nobis voluptas deleniti hic voluptatum, natus atque, accusantium quas doloremque velit quia enim illo consequuntur ipsam qui reiciendis.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-700">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-red text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Closed</div>
                            <button class="bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7 py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                            </button>
                        </div> 
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
        <div class="idea-container bg-white rounded-xl flex hover:shadow-lg cursor-pointer transition duration-150 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">22</div>
                    <div class="text-gray-500">Votes</div> 
                </div>
                <div class="mt-8">
                    <button class="w-20 bold bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold uppercase text-xxs rounded-xl px-4 transition duration-150 ease-in py-3 ">Vote</button>
                </div>
            </div> 
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none ">
                    <img src="https://source.unsplash.com/201x201/?face&crop=face&v1" alt="avatar" class ="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl semibold">
                        <a href="#" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores reiciendis at voluptatem eveniet, ipsam libero eum provident, aliquam id ullam! Expedita ea dolore corrupti dolores amet iste aperiam quaerat deleniti soluta. Doloremque accusamus dolore atque labore, impedit totam facilis quis. Fuga nobis voluptas deleniti hic voluptatum, natus atque, accusantium quas doloremque velit quia enim illo consequuntur ipsam qui reiciendis.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-700">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Implemented</div>
                            <button class="bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7 py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                            </button>
                        </div> 
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
        <div class="idea-container bg-white rounded-xl flex hover:shadow-lg cursor-pointer transition duration-150 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">2</div>
                    <div class="text-gray-500">Votes</div> 
                </div>
                <div class="mt-8">
                    <button class="w-20 bold bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold uppercase text-xxs rounded-xl px-4 transition duration-150 ease-in py-3 ">Vote</button>
                </div>
            </div> 
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none ">
                    <img src="https://source.unsplash.com/199x199/?face&crop=face&v1" alt="avatar" class ="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl semibold">
                        <a href="#" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores reiciendis at voluptatem eveniet, ipsam libero eum provident, aliquam id ullam! Expedita ea dolore corrupti dolores amet iste aperiam quaerat deleniti soluta. Doloremque accusamus dolore atque labore, impedit totam facilis quis. Fuga nobis voluptas deleniti hic voluptatum, natus atque, accusantium quas doloremque velit quia enim illo consequuntur ipsam qui reiciendis.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-700">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Considering</div>
                            <button class="bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7 py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                            </button>
                        </div> 
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
    </div> <!-- end ideas container -->

</x-app-layout>
