function makeHeader() {
  let title = "Music" + spanTag("DB", "green");
  title = h1Tag(title);
  let searchForm = "";
  let searchOptions = ["Artist", "Album", "Genre"];
  for (let i = 0; i < searchOptions.length; i++) {
    searchForm += optionTag(searchOptions[i], searchOptions[i].toLowerCase());
  }
  searchForm = selectTag(searchForm);
  searchForm += '<input type="text" name="search" placeholder="Search" />';
  searchForm += '<input type="submit" vlaue="Search" />';
  searchForm += aTag("Advanced Search", "#");
  searchForm = formTag(searchForm, "right");
  searchForm = pTag(searchForm, "search");
  headerBanner = title + searchForm;
  document.write(headerBanner);
}

function h1Tag(content) {
  return "<h1>" + content + "</h1>";
}

function pTag(content, idName) {
  return '<p id="' + idName + '">' + content + "</p>";
}

function aTag(content, link) {
  return '<a href="' + link + '">' + content + "</a>";
}

function spanTag(content, className) {
  return '<span class="' + className + '">' + content + "</span>";
}

function formTag(content, className) {
  return '<form class="' + className + '">' + content + "</form>";
}

function selectTag(content) {
  return "<select>" + content + "</select>";
}

function optionTag(content, value) {
  return '<option value="' + value + '">' + content + "</option>";
}
