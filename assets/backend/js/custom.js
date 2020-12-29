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
        var id=$(this).val();
        var id_lokasi =  $('[name="kelurahan"]').val();
        $.ajax({
            url : base_url + "Tukang/getKelurahan/"+ id ,
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
                // console.log(data);
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
});
//load data for edit
function get_tukang_edit(){
    var id_tukang = $('[name="id_tukang"]').val();
    // console.log(id_tukang);
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
                $('[name="tgl_lahir"]').val(data[i].tgl_lahir);
                $('[name="jasa"]').val(data[i].spesialisasi).trigger('change');
                $('[name="kecamatanTukang"]').val(data[i].id_kecamatan).trigger('change');
                $('[name="kelurahanEdit"]').val(data[i].id_kelurahan).trigger('change');
                $('[name="alamat"]').val(data[i].alamat_tukang);
            });
        }

    });
}


//load data for edit
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

function hapusKategoriJasa(id) {
    var r=confirm("Hapus kategori ini?")
    if (r==true)
      window.location = base_url+"Kategori/hapusKategoriJasa/"+id;
    else
      return false;
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
    var r=confirm("Hapus " + table + " ini?")
    if (r==true)
      window.location = base_url+ table + "/delete" + table + "/"+id;
    else
      return false;
}