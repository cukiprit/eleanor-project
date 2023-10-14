// Jquery untuk tambah_barang
$("#editModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let productCode = button.data("product-code");

  let modal = $(this);

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

$("#hapusProdukModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let productCode = button.data("product-code");

  let modal = $(this);
  modal.find("#hapusProduk").data("product-code", productCode);
});

$("#hapusProduk").click(function () {
  let productCode = $(this).data("product-code");

  $.ajax({
    url: `/admin/hapus_barang/${productCode}`,
    method: "DELETE",
    success: function (result) {
      if (result.success) {
        setTimeout(function () {
          // button.closest(".modal").modal("hide");
          $("#hapusProdukModal").modal("hide");

          location.reload();
        }, 500);
      }
    },
  });
});
// Batas Jquery tambah_barang

// Jquery barang_masuk
$("#editProdukMasukModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let productCode = button.data("product-code");

  let modal = $(this);

  $.ajax({
    url: `/admin/edit_barang_masuk/${productCode}`,
    method: "GET",
    dataType: "json",
    success: function (data) {
      modal.find('select[name="product_name"]').val(data.product_code);
      modal.find('input[name="date_in"]').val(data.date_in);
      modal.find('input[name="quantity"]').val(data.quantity);
    },
  });
});

$("#hapusProdukMasukModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let productCode = button.data("product-code");

  let modal = $(this);
  modal.find("#hapusProdukMasuk").data("product-code", productCode);
});

$("#hapusProdukMasuk").click(function () {
  let productCode = $(this).data("product-code");

  $.ajax({
    url: `/admin/hapus_barang_masuk/${productCode}`,
    method: "DELETE",
    success: function (result) {
      if (result.success) {
        setTimeout(function () {
          // button.closest(".modal").modal("hide");
          $("#hapusModal").modal("hide");

          location.reload();
        }, 500);
      }
    },
  });
});
// Batas Jquery barang_masuk

// Jquery barang_keluar
$("#editProdukKeluarModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let productCode = button.data("product-code");

  let modal = $(this);

  $.ajax({
    url: `/admin/edit_barang_keluar/${productCode}`,
    method: "GET",
    dataType: "json",
    success: function (data) {
      modal.find('select[name="product_name"]').val(data.product_code);
      modal.find('input[name="date_out"]').val(data.date_out);
      modal.find('input[name="quantity"]').val(data.quantity);
    },
  });
});

$("#hapusProdukKeluarModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let productCode = button.data("product-code");

  let modal = $(this);
  modal.find("#hapusProdukKeluar").data("product-code", productCode);
});

$("#hapusProdukKeluar").click(function () {
  let productCode = $(this).data("product-code");

  $.ajax({
    url: `/admin/hapus_barang_keluar/${productCode}`,
    method: "DELETE",
    success: function (result) {
      if (result.success) {
        setTimeout(function () {
          // button.closest(".modal").modal("hide");
          $("#hapusModal").modal("hide");

          location.reload();
        }, 500);
      }
    },
  });
});
// Batas Jquery barang_keluar

// Jquery preview gambar
$("#formFile").on("change", function () {
  if (this.files && this.files[0]) {
    let reader = new FileReader();

    reader.onload = function (e) {
      $("#imagePreview").attr("src", e.target.result);
    };

    reader.readAsDataURL(this.files[0]); // convert to base64 string
  }
});

// Chart
$.ajax({
  url: "/admin/get-chart",
  method: "GET",
  success: function (data) {
    drawChart(data);
  },
});

function drawChart(data) {
  let ctx = $("#productChart").get(0).getContext("2d");

  let productInData = data.products_in.map((product) => ({
    x: product.date_in,
    y: product.quantity,
  }));

  let productOutData = data.products_out.map((product) => ({
    x: product.date_out,
    y: product.quantity,
  }));

  new Chart(ctx, {
    type: "line",
    data: {
      datasets: [
        {
          label: "Produk Masuk",
          data: productInData,
          borderColor: "rgba(75, 192, 192, 1)",
          fill: false,
        },
        {
          label: "Produk Keluar",
          data: productOutData,
          borderColo: "rgba(255, 99, 132, 1)",
          fill: false,
        },
      ],
    },
    options: {
      scales: {
        x: {
          type: "time",
          time: {
            unit: "day",
          },
        },
      },
    },
  });
}
