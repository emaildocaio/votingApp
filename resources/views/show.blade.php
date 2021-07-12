<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-seibold hover:underline">
            <svg class="w-4 h-4" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none ">
                <a href="#" class="flex-none ">
                    <img src="https://source.unsplash.com/203x203/?face&crop=face&v1" alt="avatar" class ="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl semibold">
                    <a href="#" class="hover:underline">A random title goes here</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores reiciendis at voluptatem eveniet, ipsam libero eum provident, aliquam id ullam! Expedita ea dolore corrupti dolores amet iste aperiam quaerat deleniti soluta. Doloremque accusamus dolore atque labore, impedit totam facilis quis. Fuga nobis voluptas deleniti hic voluptatum, natus atque, accusantium quas doloremque velit quia enim illo consequuntur ipsam qui reiciendis.
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">Caio Farias</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category</div>
                        <div>&bull;</div>
                        <div class="text-gray-700">3 comments</div>
                    </div>
                    <div 
                        class="flex items-center space-x-2"
                        x-data = "{ isOpen: false }" 
                        >
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                        <button 
                            @Click = "isOpen = !isOpen"
                            class="bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                              </svg>
                              <ul 
                                x-cloak
                                @keydown.escape.window="isOpen = false"
                                x-show.transition.origin.top.left ="isOpen"
                                @click.away = "isOpen = false"
                                class="absolute w-44 text-left ml-8 font-semibold bg-white shadow-lg rounded-xl py-3">
                                  <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                  <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                              </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end idea container -->
    <div class="button-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <div 
                class="relative"
                x-data = "{ isOpen: false}"
                >
                <button 
                    @Click = "isOpen = !isOpen"
                    type="button"
                    class="flex items-center justify-center w-32 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                    <span class="ml-1">Reply</span>
                </button>
            <div 
                x-cloak
                @keydown.escape.window="isOpen = false"
                x-show.transition.origin.top.left ="isOpen"
                @click.away = "isOpen = false"
                class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-xl rounded-xl mt-2">
                 <form action="" class="space-y-4 px-4 py-6">
                     <div>
                         <textarea name="post-comment" id="post-comment" cols="30" rows="3" class="w-full placeholder-gray-900 text-sm bg-gray-100 rounded-xl px-4 py-2 border-none" placeholder="Go ahead, don't be shy. Share yout thoughts..."></textarea>
                     </div>
                     <div class="flex items-center space-x-3">
                        <button type="button"
                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                            <span>Post Comment</span>
                        </button>
                        <button type="button" 
                            class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                            <svg class="h-6 w-4 transform -rotate-45 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                              </svg> 
                                <span class="ml-1">Attach</span> 
                            </button>
                     </div>
                 </form>
            </div>
        </div>
            <div 
                class="relative"
                x-data = "{ isOpen: false}"
                >
                <button 
                    @Click = "isOpen = !isOpen"
                    type="button"
                    class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                    <span class="mr-1">Set Status</span>
                    <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                </button>
                <div 
                    class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-xl rounded-xl mt-2"
                    x-cloak
                    @keydown.escape.window="isOpen = false"
                    x-show.transition.origin.top.left ="isOpen"
                    @click.away = "isOpen = false"
                    >
                    <form action="" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" name="radio-direct" value="1" class="bg-gray-200 text-gray-400 border-none">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" name="radio-direct" value="1" class="bg-gray-200 text-purple border-none">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" name="radio-direct" value="1" class="bg-gray-200 text-yellow border-none">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" name="radio-direct" value="1" class="bg-gray-200 text-green border-none">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" name="radio-direct" value="1" class="bg-gray-200 text-red border-none">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <textarea name="update_comment" id="" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Add an update comment (optional)"></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" 
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                            <svg class="h-6 w-4 transform -rotate-45 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                              </svg> 
                                <span class="ml-1">Attach</span> 
                            </button>
                            <button type="submit" 
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                                <span class="ml-1">Update</span> 
                            </button>
                        </div>
                        <div>
                            <label for="" class="font-normal inline-flex items-center"></label>
                            <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked="">
                            <span class="ml-2">Notify all voters</span>
                        </div>
                    </form>
                </div>
            </div>
        
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button"
                class="w-32 h-11 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>Vote</span>
            </button>
        </div>
    </div><!-- end of buttons container -->
    <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none ">
                    <a href="#" class="flex-none ">
                        <img src="https://source.unsplash.com/203x203/?face&crop=face&v2" alt="avatar" class ="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    {{-- <h4 class="text-xl semibold">
                        <a href="#" class="hover:underline">A random title goes here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3  ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores reiciendis at voluptatem eveniet, ipsam libero eum provident, aliquam id ullam! Expedita ea dolore corrupti dolores amet iste aperiam quaerat deleniti soluta. Doloremque accusamus dolore atque labore.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">Caio Farias</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div 
                            class="flex items-center space-x-2"
                            x-data = "{ isOpen: false }"    >                             
                            <button class="bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3 relative"
                            @Click = "isOpen = !isOpen">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                                  <ul 
                                    class="absolute w-44 text-left ml-8 font-semibold bg-white shadow-lg rounded-xl py-3"
                                    x-cloak
                                    @keydown.escape.window="isOpen = false"
                                    x-show.transition.origin.top.left ="isOpen"
                                    @click.away = "isOpen = false"
                                >
                                      <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                      <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                  </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none ">
                    <a href="#" class="flex-none ">
                        <img src="https://source.unsplash.com/203x203/?face&crop=face&v3" alt="avatar" class ="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl semibold">
                        <a href="#" class="hover:underline">Status Changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-3  ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores reiciendis at voluptatem eveniet, ipsam libero eum provident, aliquam id ullam! Expedita ea dolore corrupti dolores amet iste aperiam quaerat deleniti soluta. Doloremque accusamus dolore atque labore.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Driana Mendonça</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">                             
                            <button class="bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                                  <ul class="hidden absolute w-44 text-left ml-8 font-semibold bg-white shadow-lg rounded-xl py-3">
                                      <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                      <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                  </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none ">
                    <a href="#" class="flex-none ">
                        <img src="https://source.unsplash.com/203x203/?face&crop=face&v4" alt="avatar" class ="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    {{-- <h4 class="text-xl semibold">
                        <a href="#" class="hover:underline">A random title goes here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3  ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime maiores reiciendis at voluptatem eveniet, ipsam libero eum provident, aliquam id ullam! Expedita ea dolore corrupti dolores amet iste aperiam quaerat deleniti soluta. Doloremque accusamus dolore atque labore.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">Caio Farias</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">                             
                            <button class="bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                                  <ul class="hidden absolute w-44 text-left ml-8 font-semibold bg-white shadow-lg rounded-xl py-3">
                                      <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                                      <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                  </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->
    </div><!-- end of comments container -->
</x-app-layout>
