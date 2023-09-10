<?php
$movies_obj = json_decode(file_get_contents("https://reactnative.dev/movies.json"),true);
$movies = $movies_obj["movies"];
?>

<?php foreach($movies as $row){ ?>
    <div><?=$row["title"]?> | <?=$row["releaseYear"]?></div>
<?php } ?>

<script>
    let promise = fetch('https://reactnative.dev/movies.json'); 
  promise
    .then((response) => response.json()) //Transform normal text to JSON Object
    .then((responseJson) => {
	//SUCCESS
	console.log("SUCCESS : " ,responseJson);
	var data = responseJson.movies;
console.log("DATA : " , data);
      
    })
    .catch((error) => {
//FAIL
      console.error("ERROR : " ,error);
    });

    async function getSomething() { 		//basic function style
try{
 let promiseA = await fetch('http://www.xxx.com/getUser');
 let promiseB = await fetch('http://www.xxx.com/getCompany');
 let promiseC = await fetch('http://www.xxx.com/getProduct');
 console.log('success');
 let dataA = await promiseA.json();
 let dataB = await promiseB.json();
 let dataC = await promiseC.json();
 console.log('success data :' , dataA, dataB, dataC);
}catch(error){
   console.log('fail',error);
}
}

</script>

<button onclick="getSomething();">Click me</button>
