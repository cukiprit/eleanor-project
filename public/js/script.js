$("#editModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let productCode = button.data("product-code");

  let modal = $(this);
  modal.find(`input[name="product_code"]`).val(productCode);

  $.ajax({
    url: `/admin/edit_barang/${productCode}`,
    method: "GET",
    dataType: "json",
    success: function (data) {
      modal.find('input[name="product_name"]').val(data.product_name);
      modal.find('input[name="product_price"]').val(data.product_price);
      modal.find('input[name="product_stock"]').val(data.product_stock);
      modal
        .find('textarea[name="product_description"]')
        .val(data.product_description);
      // modal.find('input[name="product_picture"]').val(data.product_picture);
    },
  });
});

$("#formFile").on("change", function () {
  if (this.files && this.files[0]) {
    let reader = new FileReader();

    reader.onload = function (e) {
      $("#imagePreview").attr("src", e.target.result);
    };

    reader.readAsDataURL(this.files[0]); // convert to base64 string
  }
});
