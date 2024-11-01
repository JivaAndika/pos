$(document).ready(function () {
  $("#keyword").on("keyup", function () {
    $("#container").load(
      "./../search/search-kategori.php?keyword=" + $("#keyword").val()
    );
  });
});
