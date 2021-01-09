$(document).ready(function(){
    
    $('.tanggal').datepicker({
        format: "yyyy-mm-dd",
        autoclose:true  
    });
    
    $('.kecamatan').change(function(){ 
        var id=$(this).val();
        $.ajax({
            url : base_url + "Vendor/getKelurahan/"+ id ,
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].id_kelurahan+'>'+data[i].kelurahan+'</option>';
                }
                $('#kelurahan').html(html);

            }
        });
        return false;
    }); 

    $('.kecamatanEdit').change(function(){ 
        var id=$(this).val();
        var id_lokasi =  $('[name="kelurahan"]').val();
        $.ajax({
            url : base_url + "Vendor/getKelurahan/"+ id ,
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){

                $('select[name="kelurahanEdit"]').empty();

                $.each(data, function(key, value) {
                    // console.log(value.kelurahan);
                    if(id_lokasi==value.id_kelurahan){
                        $('select[name="kelurahanEdit"]').append('<option value="'+ value.id_kelurahan +'" selected>'+ value.kelurahan +'</option>').trigger('change');
                    }else{
                        $('select[name="kelurahanEdit"]').append('<option value="'+ value.id_kelurahan +'">'+ value.kelurahan +'</option>');
                    }
                });

            }
        });
        return false;
    });
     
    $('.kecamatanTukang').change(function(){ 
        var ide=$(this).val();
        var id_lokasi =  $('[name="kelurahan"]').val();
        $.ajax({
            url : base_url + "Tukang/getKelurahan/"+ id ,
            method : "POST",
            data : {id: ide},
            async : true,
            dataType : 'json',
            success: function(data){
                $('select[name="kelurahanEdit"]').empty();

                $.each(data, function(key, value) {
                    if(id_lokasi==value.id_kelurahan){
                        $('select[name="kelurahanEdit"]').append('<option value="'+ value.id_kelurahan +'" selected>'+ value.kelurahan +'</option>').trigger('change');
                    }else{
                        $('select[name="kelurahanEdit"]').append('<option value="'+ value.id_kelurahan +'">'+ value.kelurahan +'</option>');
                    }
                });

            }
        });
        return false;
    });
});

function get_sweetalert(pesan, judul, tema){
    Swal.fire({
        title: judul,
        icon: tema,
        text: pesan
    });
}

function get_tukang_edit(){
    var id_tukang = $('[name="id_tukang"]').val();
    $.ajax({
        url : base_url + "Tukang/get_data_edit/",
        method : "POST",
        data :{id_tukang :id_tukang},
        async : true,
        dataType : 'json',
        success : function(data){
            $.each(data, function(i, item){
                $('[name="nama"]').val(data[i].nama_tukang);
                $('[name="kelurahan"]').val(data[i].id_kelurahan);
                $('[name="hp"]').val(data[i].hp_tukang);
                $('[name="email"]').val(data[i].email);
                $('[name="tgl_lahir"]').val(data[i].tgl_lahir);
                $('[name="jasa"]').val(data[i].spesialisasi).trigger('change');
                $('[name="kecamatanTukang"]').val(data[i].id_kecamatan).trigger('change');
                $('[name="kelurahanEdit"]').val(data[i].id_kelurahan).trigger('change');
                $('[name="alamat"]').val(data[i].alamat_tukang);
            });
        }

    });
}

function get_data_edit(){
    var id_vendor = $('[name="id_vendor"]').val();
    // console.log(id_vendor);
    $.ajax({
        url : base_url + "Vendor/get_data_edit/",
        method : "POST",
        data :{id_vendor :id_vendor},
        async : true,
        dataType : 'json',
        success : function(data){
            // console.log(data);
            $.each(data, function(i, item){
                $('[name="nama"]').val(data[i].nama_vendor);
                $('[name="kelurahan"]').val(data[i].id_kelurahan);
                $('[name="kecamatanEdit"]').val(data[i].id_kecamatan).trigger('change');
                $('[name="kelurahanEdit"]').val(data[i].id_kelurahan).trigger('change');
                $('[name="telepon"]').val(data[i].no_hp);
                $('[name="detail"]').val(data[i].alamat_vendor);
            });
        }

    });
}

function ulasan(id_material, pesan){
    if(pesan==1){
        $('.modal-title').text('Berikan Ulasan');
        id_transaksi = $('#noTransaksi').text();
        $("#saveUlasan").trigger("reset");
        $('#lihat_ulasan').hide();
        $('#berikan_ulasan').show();
        $('#saveUlasan').attr('action', base_url + 'transaksi/saveUlasan/' + id_transaksi + '/' + id_material);
        $('#modalUlasan').modal('show');
    } else if(pesan==2){
        $('#berikan_ulasan').hide();
        $('#lihat_ulasan').show();
        $('#modalUlasan').modal('show');
    };

    // $.ajax({
    //     url : base_url + "transaksi/get_data_ulasan/" + id_transaksi,
    //     method : "POST",
    //     async : true,
    //     dataType : 'json',
    //     success : function(dataUlasan){
    //         $.each(dataUlasan, function(key, item){
    //             $('#tabel_daftar').append(tabel);
    //         });
    //     }
    // });
}

function get_data_ulasan(id_transaksi){
    $.ajax({
        url : base_url + "transaksi/get_data_produk_transaksi/" + id_transaksi,
        method : "POST",
        async : true,
        dataType : 'json',
        success : function(data){
            $.each(data, function(i, value){
                var tabel = ''; 
                var tombol = '';
                $.ajax({
                    url : base_url + "transaksi/get_data_ulasan/" + id_transaksi + "/" + value.id_material,
                    method : "POST",
                    async : true,
                    dataType : 'json',
                    success : function(dataUlasan){
                        var aksi = '';
                        $.each(dataUlasan, function(key, item){
                                aksi += '<td class="text-center"><a href="javascript:void(0);" type="button" class="btn btn-success" onclick="ulasan('+ value.id_material +', 2);">Lihat Ulasan</a></td>';
                        });
                        if(!aksi){
                            aksi += '<td class="text-center"><a href="javascript:void(0);" type="button" class="btn btn-success" onclick="ulasan('+ value.id_material +', 1);">Berikan Ulasan</a></td>';
                        }
                        tabel += '<tr><td class="text-center"><img alt="" width="100px" id="gambar_produk" src="' + base_url + 'assets/images/material/' + value.path + ' "></td><td>' + value.nama_material + '</td><td>' + value.harga_material + '</td><td>' + value.keterangan_satuan + ' ' + value.satuan + '</td>' + aksi + '</tr>';
                        $('#tabel_daftar').append(tabel);
                    }
                });
            });
        }
    });
}

function showModalVerifP($id){
    $('.modal-title').text('Verifikasi Pembayaran');
    $.ajax({
        url : "Transaksi/cekPembayaran/"+$id,
        type : "GET",
        dataType : "JSON",
        success : function(data){
            var formatDate = function(date) {
                return date.getDate() + "-" + date.getMonth() + "-" + date.getFullYear() + " " +  ('0' + date.getHours()).slice(-2) + ":" + ('0' + date.getMinutes()).slice(-2) + ":" + ('0' + date.getSeconds()).slice(-2) + ' ' + (date.getHours() < 12 ? 'AM' : 'PM');
              }
            var timestamp = data.waktu;
            var date = new Date(timestamp);
            $('#tujuanBank').html(data.nama_rekening);
            $('#rekeningTujuan').html(data.no_rekening);
            $('#nominalBayar').html(data.total_harga);
            $('#namaPengirim').html(data.nama_pengirim);
            $('#asalBank').html(data.asal_bank);
            $('#asalRekening').html(data.asal_rekening);
            $('#totalBayar').html(data.total_bayar);
            $('#waktuBayar').html(date);
            
            $('#btnKonfirmasi').attr("href", base_url + "Transaksi/konfirmasiMaterial/" + $id + "/1/" + data.total_harga);
            $('#btnBatal').attr("href", base_url + "Transaksi/konfirmasiMaterial/" + $id + "/2/0");
            $('#buktiTF').attr("src", base_url + "assets/images/transaksi/" + data.path);
            $('#lihatGambar').attr("href", base_url + "assets/images/transaksi/" + data.path);
            $('#modalTransaksi').modal('show');
        },
        error : function (jqXHR, textStatus, errorThrown){
            alert('Gagal untuk mengupdate');
        }
    });
}

function hubungiVendor($id, $tabel){
    $('.modal-title').text('Hubungi Vendor');
    $.ajax({
        url : "Transaksi/getPemesananMaterialBy/"+$id,
        type : "GET",
        dataType : "JSON",
        success : function(data){
            // console.log(data);
            $('#bodyModalPesanan').empty();
            $('#bodyModalPemesan').empty();
            
            $.each(data, function(key, value) {
                var tabel = '';
                if ($tabel==1){
                    tabel += '<tr><td>' + value.nama_material + '</td><td>' + value.harga_material + '</td><td>' + value.quantity + '</td><td>' + value.nama_vendor + '</td><td>' + value.alamat_vendor + '</td><td>' + value.no_hp + '</td></tr>';
                    $('#bodyModalPesanan').append(tabel);
                    if (key==0)
                    {
                        var tabelPemesan = '';
                        tabelPemesan += '<tr><td>' + value.nama_penerima + '</td><td>' + value.hp_penerima + '</td><td>' + value.alamat_penerima + '</td><td>' + value.kecamatan + '</td></tr>';
                        $('#bodyModalPemesan').append(tabelPemesan);
                    }
                } else if ($tabel==2){
                    tabel += '<tr><td>' + value.nama_material + '</td><td>' + value.harga_material + '</td><td>' + value.quantity + '</td></tr>';
                    $('#bodyModalPesanan').append(tabel);
                }
            });

            $('#modalHubungiVendor').modal('show');
        },
        error : function (jqXHR, textStatus, errorThrown){
            alert('Gagal memproses');
        }
    });
}


function konfirmasiPengiriman(id, pesan){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            cancelButton: 'btn btn-danger mr-1',
            confirmButton: 'btn btn-success ml-1'
        },
        buttonsStyling: false
    })
    
    if (pesan==1) {
        swalWithBootstrapButtons.fire({
            title: 'Konfirmasi pesanan sudah dikirim',
            text: "Tidak akan dapat membatalkan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Konfirmasi!',
            cancelButtonText: 'Batal!',
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = base_url+"Transaksi/konfirmasiSudahTerkirim/"+id+"/"+pesan;
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: 'Konfirmasi dibatalkan',
                    icon: 'error'
                });
            }
        })
    } else if (pesan==2 || pesan==3) {
        swalWithBootstrapButtons.fire({
            title: 'Konfirmasi pesanan sudah sampai',
            text: "Tidak akan dapat membatalkan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Konfirmasi!',
            cancelButtonText: 'Batal!',
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = base_url+"Transaksi/konfirmasiSudahTerkirim/"+id+"/"+pesan;
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: 'Konfirmasi dibatalkan',
                    icon: 'error'
                });
            }
        })
    }
}

/* ============== KUMPULAN NONAKTIFKAN DAN HAPUS ============== */

function delete_double(id, controller, table) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            cancelButton: 'btn btn-danger mr-1',
            confirmButton: 'btn btn-success ml-1'
        },
        buttonsStyling: false
    })
    
    swalWithBootstrapButtons.fire({
        title: 'Hapus kategori ini?',
        text: "Tidak akan dapat membatalkan ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus ini!',
        cancelButtonText: 'Batal!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = base_url+ controller + "/delete" + table + "/"+id;
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                title: 'Data tidak dihapus',
                icon: 'error'
            });
        }
    })
}

function hapusKategoriMaterial(id) {
    var r=confirm("Hapus kategori ini?")
    if (r==true)
      window.location = base_url+"Kategori/hapusKategoriMaterial/"+id;
    else
      return false;
}

function hapusVendor(id) {
    var r=confirm("Hapus vendor ini?")
    if (r==true)
      window.location = base_url+"Vendor/deleteVendor/"+id;
    else
      return false;
}

function hapus(id, table){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            cancelButton: 'btn btn-danger mr-1',
            confirmButton: 'btn btn-success ml-1'
        },
        buttonsStyling: false
    })
    
    swalWithBootstrapButtons.fire({
        title: 'Apakah mau hapus data ini?',
        text: "Tidak akan dapat membatalkan ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus ini!',
        cancelButtonText: 'Batal!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = base_url+ table + "/delete" + table + "/"+id;
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                title: 'Data tidak dihapus',
                icon: 'error'
            });
        }
    })
}

function nonaktifkan(id, table){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            cancelButton: 'btn btn-danger mr-1',
            confirmButton: 'btn btn-success ml-1'
        },
        buttonsStyling: false
    })
    
    swalWithBootstrapButtons.fire({
        title: 'Apakah mau menonaktifkan data ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Nonaktifkan!',
        cancelButtonText: 'Batal!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = base_url+ table + "/"+id;
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                title: 'Data tidak dinonaktifkan',
                icon: 'error'
            });
        }
    })
}

function aktifkan(id, table){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            cancelButton: 'btn btn-danger mr-1',
            confirmButton: 'btn btn-success ml-1'
        },
        buttonsStyling: false
    })
    
    swalWithBootstrapButtons.fire({
        title: 'Apakah mau mengaktifkan data ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Aktifkan!',
        cancelButtonText: 'Batal!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = base_url+ table + "/"+id;
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                title: 'Data tidak diaktifkan',
                icon: 'error'
            });
        }
    })
}

/* ============== KUMPULAN NONAKTIFKAN DAN HAPUS ============== */