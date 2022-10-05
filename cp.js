<script>
Moralis.initialize("vnwfK8neMxiH5D3VCZUUCZbT42GuHZ5Ykuezkj78");
Moralis.serverURL="https://dtw3vvtqurby.usemoralis.com:2053/server";

/*Moralis.Web3.authenticate().then(function(){
    console.log(user.get('ethAdress'));
})*/

login=async()=>{
    Moralis.Web3.authenticate().then(function(user){
        console.log('logged in')
})}

 uploadMetadata= async() => {
    const name=document.getElementById("name").value;
    const email=document.getElementById("email").value;
    const age=document.getElementById("age").value;
    const contact=document.getElementById("contact").value;
    const aadhar=document.getElementById("aadhar").value;
    const location=document.getElementById("location").value;
    //const description=document.getElementById("description").value;

 
const metadata={
    "name":name,
    "email":email,
    "age":age,
    "contact":contact,
    "aadhar":aadhar,
    "location":location,
    //"description":description

}
const file= new Moralis.File("file.json",{base64:btoa(JSON.stringify(metadata))});
await file.saveIPFS();
var hash=file.ipfs();
console.log(hash);
}
asif= async()=>{
    await uploadMetadata()
}
</script>