document.addEventListener('DOMContentLoaded', function () {
  var toggleElements = document.querySelectorAll('.sm_category_header');

  toggleElements.forEach(function (toggleElement) {
    toggleElement.addEventListener('click', function () {
      // この要素の直後の兄弟要素を取得する方法を示す
      var content = this.nextElementSibling;

      if (content && content.classList.contains('sm_categories')) {
        content.style.display = content.style.display === 'grid' ? 'none' : 'grid';
      }
    });
  });
});
