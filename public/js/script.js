$(window).on('scroll', () => {
  this.scrollY > 10 ?
    $('#navigation-bar').addClass('nav-active') :
    $('#navigation-bar').removeClass('nav-active')
})

$('.navbar-toggler').on('click', () => {
  $('.navbar').toggleClass('nav-active');
})

const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: [2020, 2021, 2022, 2023],
    datasets: [
      {
        label: 'Barang Masuk',
        data: [6, 9, 3, 5],
        fill: true,
        borderWidth: 1,
        pointRadius: 2
      },
      {
        label: 'Barang Keluar',
        data: [7, 3, 2, 4],
        fill: true,
        borderWidth: 1,
        pointRadius: 2
      },
    ]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});



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

$("#formFile").on("change", function () {
  if (this.files && this.files[0]) {
    let reader = new FileReader();

    reader.onload = function (e) {
      $("#imagePreview").attr("src", e.target.result);
    };

    reader.readAsDataURL(this.files[0]); // convert to base64 string
  }
});
