function makeHeader() {
  let title = spanTag("Music", "black") + spanTag("DB", "green");
  title = aTag(title, "Main.html");
  title = h1Tag(title);
  let searchForm = "";
  let searchOptions = ["Artist", "Album", "Genre"];
  for (let i = 0; i < searchOptions.length; i++) {
    searchForm += optionTag(searchOptions[i], searchOptions[i].toLowerCase());
  }
  searchForm = selectTag(searchForm);
  searchForm += '<input type="text" name="search" placeholder="Search" />';
  searchForm += '<input type="submit" value="Search" />';
  searchForm += aTag("Advanced Search", "#");
  searchForm = formTag(searchForm, "right");
  searchForm = pTag(searchForm, "search");
  let loginLink = aTag("Login", "loginPage.html");
  loginLink = "<p class=" + "right" + ">" + loginLink + "</p>";
  headerBanner = title + searchForm + loginLink;
  document.write(headerBanner);
}

function makeFooter() {
  let footer =
    "<p>All music data comes from the " +
    aTag("MusicBrainz", "https://musicbrainz.org") +
    " database</p>";
  document.write(footer);
}

/*tagging functions*/

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
