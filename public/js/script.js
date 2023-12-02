// Jquery user
$("#editUserModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let user_id = button.data("user-id");

  console.log(user_id);
  let modal = $(this);

  modal.find("#formEdit").attr("action", `/admin/edit_user/${user_id}`);

  $.ajax({
    url: `/admin/edit_user/${user_id}`,
    method: "GET",
    dataType: "json",

    success: function (data) {
      console.log(data);
      modal.find('input[name="name"]').val(data.name);
      modal.find('input[name="email"]').val(data.email);
      modal.find('select[name="role"]').val(data.role);
    },
  });
});

$("#hapusUserModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let user_id = button.data("user-id");

  let modal = $(this);
  modal.data("user-id", user_id);
});

$("#hapusUser").click(function () {
  let user_id = $(this).data("user-id");
  console.log(user_id);
  $.ajax({
    url: `/admin/hapus_user/${user_id}`,
    method: "DELETE",
    success: function (result) {
      if (result.success) {
        setTimeout(function () {
          $("#hapusUserModal").modal("hide");
          location.reload();
        }, 500);
      }
    },
  });
});
// Batas Jquery user

// Jquery untuk tambah_barang
$("#editModal").on("show.bs.modal", function (event) {
  let button = $(event.relatedTarget);
  let productCode = button.data("product-code");

  console.log(productCode);
  let modal = $(this);

  modal.find("#formEdit").attr("action", `/admin/edit_barang/${productCode}`);

  $.ajax({
    url: `/admin/edit_barang/${productCode}`,
    method: "GET",
    dataType: "json",
    success: function (data) {
      console.log(data);
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
  modal.data("product-code", productCode);
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

  modal
    .find("#formEdit")
    .attr("action", `/admin/edit_barang_masuk/${productCode}`);

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
  modal.data("product-code", productCode);
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

  modal
    .find("#formEdit")
    .attr("action", `/admin/edit_barang_keluar/${productCode}`);

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
  modal.data("product-code", productCode);
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
