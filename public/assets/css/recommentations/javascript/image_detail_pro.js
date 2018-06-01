// Start rendering template
var foods = [
  {
    id: 1,
    name: 'food 1',
    link: '"./image/rau1.jpg"',
    price: 123,
    unit: '&#36;'
  },
  {
    id: 2,
    name: 'food 2',
    link: '"./image/o1.jpg"',
    price: 133,
    unit: '&#36;'
  },
  {
    id: 3,
    name: 'food 3',
    link: '"./image/t1.jpg"',
    price: 323,
    unit: '&#36;'
  }
];

// Define a div to cover all elements rendered *1
var link = '',
    name = '',
    foodFrame = document.createElement('div'),
    foodsLength = foods.length;

// Set attribute after creating element to style it
foodFrame.setAttribute('class', 'food-list');

// Define template for each food
function foodTpl(food) {
  return '<div class="foods">' +
       '<img class="food-image" src="' + food.link + '" alt="' + food.name + '"/>' +
       '<div class="food-info">' +
          '<h3>' + food.name + '</h3>' +
       '</div>'
    '</div>';
}

// Add template for each food to *1 element
for (i = 0; i < foodsLength; i ++) {
  foodFrame.insertAdjacentHTML('beforeEnd', foodTpl(foods[i]));
}

// Show *1 element to content
var foodLayout = document.getElementById('content');
foodLayout.appendChild(foodFrame);

// End rendering! You are hero!