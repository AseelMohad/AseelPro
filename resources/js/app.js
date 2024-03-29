/* eslint-disable no-use-before-define */
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

let tasks = [];
let selectedCategory = null;


Alpine.start();



const saveLocal = () => {
  localStorage.setItem('tasks', JSON.stringify(tasks));
};

const getLocal = () => {
  const tasksLocal = JSON.parse(localStorage.getItem('tasks'));
  if (tasksLocal) {
    tasks = tasksLocal;
  }
};

const toggleScreen = () => {
  screenWrapper.classList.toggle('show-category');
};


const updateTotals = () => {
  const categoryTasks = tasks.filter(
    (task) => task.category_id === selectedCategory.id
  );
  numTasks.innerHTML = `${categoryTasks.length} Tasks`;
  totalTasks.innerHTML = tasks.length;
};

const renderCategories = () => {
  categoriesContainer.innerHTML = '';
  categories.forEach((category) => {
    const categoryTasks = tasks.filter(
      (task) => task.category_id === category.id
    );
    const div = document.createElement('div');
    div.classList.add('category');
    div.addEventListener('click', () => {
      screenWrapper.classList.toggle('show-category');
      selectedCategory = category;
      updateTotals();
      categoryTitle.innerHTML = category.title;
      categoryImg.src = `images/${category.img}`;
      renderTasks();
    });

    div.innerHTML = `
                  <div class="left">
                <img src="images/${category.img}"
                 alt="${category.title}"
                  />
                <div class="content">
                  <h1>${category.title}</h1>
                  <p>${categoryTasks.length} Tasks</p>
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
    `;

    categoriesContainer.appendChild(div);
  });
};
