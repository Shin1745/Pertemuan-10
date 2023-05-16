<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 2</title>
</head>
<body>
    
    <form name="latihan1" id="latihan1"method="POST" onsubmit="return checkform()">
        NIM<br>
        <input type="text" name="txNIM" id="txNIM"><br>

       <br>Jenis Kelamin<br>
        <input type="radio" name="txJK" id="txJK" value="L">Laki-Laki
        <input type="radio" name="txJK" id="txJK" value="P">Perempuan<br>
    
        <br>Jurusan<br>
        <select name="txJURUSAN" id="txJURUSAN">
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
            <option value="DSN">DESAIN</option>
        </select>
    
       <br>Hobi<br>
        <input type="checkbox" name="txhobi" id="txhobi" value="1">Sepak Bola
        <input type="checkbox" name="txhobi" id="txhobi" value="2">Bulu Tangkis
        <input type="checkbox" name="txhobi" id="txhobi" value="3">Bola Voly
        <input type="checkbox" name="txhobi" id="txhobi" value="4">Bola Takraw
        <input type="checkbox" name="txhobi" id="txhobi" value="5">Dodgeball
   
        <br><br>
        <button type="submit">Kirim Data</button>
    </form>
    
        <script type="text/javascript">
function checkform(){
    let frm = document.getElementById("latihan1").elements
    let NIM = frm.txhobi.value
    let jnskel = frm.txJK.value
    let jur = frm.txJURUSAN.value
    let hobi1 = frm.txhobi[0].checked
    let hobi2 = frm.txhobi[1].checked
    let hobi3 = frm.txhobi[2].checked
    let hobi4 = frm.txhobi[3].checked
    let hobi5 = frm.txhobi[4].checked


    console.log("NIM: "+NIM);
    console.log("Jenis Kelamin: "+jnskel); 
    console.log("Jurusan: "+jur);
    console.log("Hobi :"+hobi1)
    console.log("Hobi :"+hobi2)
    console.log("Hobi :"+hobi3)
    console.log("Hobi :"+hobi4)
    console.log("Hobi :"+hobi5)

   
    
    return false;
  }

    </script>

</body>
</html>