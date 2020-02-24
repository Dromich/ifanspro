function changed(e) {
  parent.window.textChanged(e.target.attributes['data-key'].value, e.target.textContent);
  changeText(e.target.attributes['data-key'].value, e.target.textContent);
}

function changeText(key, val) {
  document.querySelectorAll('.admin-edit[data-key='+key+']').forEach(function(x) {
    if(x.textContent != val) x.textContent = val;
  })
}

function changedFields() {
  var data = {}
  document.querySelectorAll(".admin-edit[data-changed='1']").forEach(function(x) {
    data[x.attributes['data-key'].value] = x.textContent;
  });
  return data;
}

document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll(".admin-edit").forEach(function(x) {
    var par = x.parentElement;
    var children = [];
    par.childNodes.forEach(function(ch) {
      if(ch.nodeName !== "#text" || (ch.nodeName === "#text" && ch.textContent.trim() !== "")) {
        children.push(ch);
      }
    });
    if(children.length == 1) {
      par.classList.add("admin-edit");
      par.setAttribute('data-key', x.attributes['data-key'].value);
      par.setAttribute('data-changed', x.attributes['data-changed'].value);
      par.setAttribute('contenteditable', true);
      par.textContent = x.textContent;
    }
  });
  document.querySelectorAll(".admin-edit").forEach(function(x) {
    x.addEventListener("input", changed);
    x.addEventListener("click", function(e) {
      e.preventDefault();
    });
  });
});