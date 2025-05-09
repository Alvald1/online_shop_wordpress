function redirectToLink(element) {
  // Получаем родительский элемент <a>
  var parentLink = element.closest("a");

  // Получаем адрес ссылки
  var link = parentLink.getAttribute("href");

  // Переходим на страницу с адресом из ссылки
  window.location.href = link;
}

// Найти все элементы с классом "product-quantity"
var quantityElements = document.querySelectorAll(".product-quantity");

// Пройти по найденным элементам и добавить атрибут readonly к дочернему input с классом "input-text qty text"
quantityElements.forEach(function (quantityElement) {
  var inputElement = quantityElement.querySelector(".input-text.qty.text");

  if (inputElement) {
    inputElement.setAttribute("readonly", true);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Функция для добавления атрибута hidden
  function addHiddenAttribute(elements) {
    elements.forEach(function (element) {
      if (element) {
        element.setAttribute("hidden", true);
      }
    });
  }

  // Функция для обработки изменений в DOM
  function handleDomChanges(mutationsList, observer) {
    for (var mutation of mutationsList) {
      if (mutation.type === "childList") {
        // Добавляем атрибут hidden к новым элементам
        addHiddenAttribute([
          ...document.querySelectorAll("div.coupon"),
          ...document.querySelectorAll("th.product-subtotal"),
          ...document.querySelectorAll("td.product-subtotal"),
          ...document.querySelectorAll("td.actions"),
          ...document.querySelectorAll("tr.cart-subtotal"),
        ]);
      }
    }
  }

  // Создаем экземпляр MutationObserver
  var observer = new MutationObserver(handleDomChanges);

  // Настраиваем observer на отслеживание добавления узлов
  var config = { childList: true, subtree: true };

  // Запускаем observer, передавая целевой узел и настройки
  observer.observe(document.body, config);

  // Вызываем функцию для первоначального скрытия элементов
  addHiddenAttribute([
    ...document.querySelectorAll("div.coupon"),
    ...document.querySelectorAll("th.product-subtotal"),
    ...document.querySelectorAll("td.product-subtotal"),
    ...document.querySelectorAll("td.actions"),
    ...document.querySelectorAll("tr.cart-subtotal"),
  ]);
});

// Добавляем стили для отмены стилей .woocommerce table.shop_table_responsive tr td
var style = document.createElement("style");
style.innerHTML = `
  div.coupon[hidden],
  th.product-subtotal[hidden],
  td.product-subtotal[hidden],
  td.actions[hidden],
  tr.cart-subtotal[hidden] {
      display: none !important;
      text-align: initial !important;
  }
`;
document.head.appendChild(style);

// Получаем все элементы с классом "product-remove"
var removeLinks = document.querySelectorAll(".product-remove a");

// Итерируем по всем найденным элементам
removeLinks.forEach(function (removeLink) {
  // Создаем элемент изображения
  var imageElement = document.createElement("img");
  imageElement.src =
    theme_vars.template_directory_uri + "/assets/img/icons/x-mark.png"; // Замените на фактический путь к изображению
  imageElement.alt = "Удалить товар";
  imageElement.style.width = "30px";
  imageElement.onclick = function () {
    redirectToLink(this);
  };

  // Очищаем содержимое ссылки и добавляем изображение
  removeLink.innerHTML = "";
  removeLink.appendChild(imageElement);
});

var restoreLinks = document.querySelectorAll(
  "div.woocommerce-message a.restore-item"
);

// Итерируем по всем найденным элементам
restoreLinks.forEach(function (restoreLink) {
  // Добавляем событие onclick
  restoreLink.onclick = function () {
    redirectToLink(this);
  };
});
