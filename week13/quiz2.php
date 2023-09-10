<body>
  <button onclick="getStaff();">Load Staff</button>
  <div id="content"></div>
  <script>
    async function getStaff() {
      //basic function style
      try {
        let promise = await fetch("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json");
        let people_object = await promise.json();
        console.log("success:", people_object);
        let people = people_object.people;
        let contentDiv = document.querySelector("#content");
        for(let item of people){
            console.log(item);
            let newDiv = document.createElement("div");
            newDiv.innerHTML = item.name + " | " + item.education;
            contentDiv.appendChild(newDiv);
        }      
      } catch (error) {
        console.log("fail", error);
      }
    }
  </script>
</body>
