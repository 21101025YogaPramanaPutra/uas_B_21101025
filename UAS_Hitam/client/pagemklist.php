<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET","http://localhost/UAS_Hitam/server/dtmk.php");
    gh.send();

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        var tx ='<h3>List Data Mata Kuliah</h3>';
        tx +='<table class="table table bg-dark text-white"><thead><tr><th scope="col">#</th><th scope="col">Kode Matakuliah</th><th scope="col">Nama Matakuliah</th><th scope="col">Semester</th><th scope="col"> <a href="index.php?p=mk&sp=addnew" class="badge bg-danger">Plus</a></th></tr></thead><tbody>';

        let nomor = 1;
        for(i=0;i<dta.length;i++){
        
            tx +='<tr>';
            tx +='  <th scope="row">'+nomor+'</th>';
            tx +='  <td>'+dta[i][0]+'</td>';
            tx +='  <td>'+dta[i][1]+'</td>';
            tx +='  <td>'+dta[i][2]+'</td>';
            tx +='  <td> ';
            tx +='<a href="index.php?p=mk&sp=edit&kode_mk='+dta[i][0]+'" class="badge bg-light text-dark">edit</a> ';
            tx +='<a href="index.php?p=mk&sp=dele&kode_mk='+dta[i][0]+'" class="badge bg-danger">hapus</a> ';
            tx +='</td>';
            tx +='</tr>';
            nomor++;
        }    
        tx +='  </tbody></table>';

        document.getElementById("konten").innerHTML = tx;
    }
</script>