/* global $ */
$(document).ready(function () {
  if (document.body.className.match("ps_172")) {
    var $searchWidget = $("#search_widget");
    var $searchBox = $searchWidget.find("input[type=text]");
    var searchURL = $searchWidget.attr("data-search-controller-url");

    $.widget("prestashop.psBlockSearchAutocomplete", $.ui.autocomplete, {
      _renderItem: function (ul, product) {
        console.log("psBlockSearchAutocomplete", product);
        return $("<li>")
          .append(
            $("<a>")
              .append(
                $("<span>")
                  .addClass("search_right")
                  .append(
                    $("<span>")
                      .html(product.manufacturer_name)
                      .addClass("search_brand")
                  )
                  .append(
                    $("<span>").html(product.name).addClass("search_name")
                  )
                  .append(
                    $("<span>").html(product.price).addClass("search_price")
                  )
              )

              .append($("<span>").addClass("clearfix"))
          )
          .appendTo(ul);
      },
    });

    $searchBox.psBlockSearchAutocomplete({
      source: function (query, response) {
        $.post(
          searchURL,
          {
            s: query.term,
            resultsPerPage: 10,
          },
          null,
          "json"
        )
          .then(function (resp) {
            console.log("resp 1", resp);
            response(resp.products);
          })
          .fail(response);
      },
      select: function (event, ui) {
        var url = ui.item.url;
        window.location.href = url;
      },
    });
  } else {
    var $searchWidget;
    if (window.innerWidth > 768) {
      $searchWidget = $("#search_widget_desktop").find("#search_widget");
    } else {
      $searchWidget = $("#search_widget_mobile").find("#search_widget");
    }

    var $searchBox = $searchWidget.find("input[type=text]");
    var searchURL = $searchWidget.attr("data-search-controller-url");
    var $clearButton = $searchWidget.find("i.clear");

    console.log($searchBox);
    console.log(searchURL);

    console.log("$searchWidget", $searchWidget);
    $.widget("prestashop.psBlockSearchAutocomplete", $.ui.autocomplete, {
      _renderItem: function (ul, product) {
        var image = product.cover
          ? product.cover
          : prestashop.urls.no_picture_image;
        var $img = $(
          '<img class="autocomplete-thumbnail" src="' +
            image.bySize.small_default.url +
            '">'
        );
        return $("<li>")
          .append(
            $("<a>")
              .append($("<span>").addClass("search_left").append($img))
              .append(
                $("<span>")
                  .addClass("search_right")
                  .append(
                    $("<span>")
                      .html(product.manufacturer_name)
                      .addClass("search_brand")
                  )
                  .append(
                    $("<span>").html(product.name).addClass("search_name")
                  )
                  .append(
                    $("<span>").html(product.price).addClass("search_price")
                  )
              )
              .append($("<span>").addClass("clearfix"))
          )
          .appendTo(ul);
      },
    });

    $searchBox.psBlockSearchAutocomplete({
      source: function (query, response) {
        $.post(
          searchURL,
          {
            s: query.term,
            resultsPerPage: 10,
          },
          null,
          "json"
        )
          .then(function (resp) {
            response(resp.products);
          })
          .fail(response);
      },
      select: function (event, ui) {
        var url = ui.item.url;
        window.location.href = url;
      },
    });
  }
});
