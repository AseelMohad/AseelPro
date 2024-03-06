<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="home-screen screen">
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 padclass">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg padclass ">
                    <div class="p-6 text-gray-900 padclass">
                        <div class="welcome">    
                            <div class="content">
                                {{ __("You're logged in!") }}
                                <h1>Hello John</h1>
                                <p>Today you have <span id="total-tasks">5</span> tasks</p>
                            </div>
                            <div class="img">
                                <div class="backdrop">

                                </div>
                                <img src="Images/boy.png" alt="" />
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="categories-wrapper">
            <h1>Categories</h1>
            <div class="categories">

                @foreach($categories as $category)
                     
                    <a href="{{ route('category_details', ['id' => $category->id]) }}">

                      <?php
                          $categoryTasks = $category->tasks;
                          $numTasks = count($categoryTasks);
                      ?>
                      <div class="category">
                          <div class="left">
                              <img src="images/{{ $category->img }}" alt="{{ $category->title }}" />
                              <div class="content">
                                  <h1>{{ $category->title }}</h1>
                                  <p>{{ $numTasks }} Tasks</p>
                              </div>
                          </div>
                          <div class="options">
                              <div class="toggle-btn">
                                  <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="w-6 h-6"
                                  >
                                      <path
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"
                                      />
                                  </svg>
                              </div>
                          </div>
                      </div>
                    </a>
                @endforeach
                  

            </div>
        
        </div>
    
    
</x-app-layout>
