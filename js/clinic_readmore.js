  document.addEventListener('DOMContentLoaded', function () {
    // クリックされた要素のdata-target属性からIDを取得
    var toggles = document.querySelectorAll('.accordion-toggle');
    toggles.forEach(function (toggle) {
      toggle.addEventListener('click', function () {
        var targetId = toggle.getAttribute('data-target');
        var content = document.getElementById(targetId);
        content.style.maxHeight = content.scrollHeight + "px";
        toggle.remove();
      });
    });
  });