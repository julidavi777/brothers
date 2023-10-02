<div class="form-group selectChosen col-md-6 my-2">
    <label for="departamento">Departamento</label>
    <select name="departamento" id="selectDepartment" class="form-control select2">
        <option value="">Selecciona un departamento</option>
    </select>
</div>
<div class="form-group selectChosen col-md-6 my-2">
    <label for="municipio">Municipio</label>
    <select name="municipio" id="selectCity" class="form-control select2">
        <option value="">Selecciona un Municipio</option>
    </select>
</div>

<script>
    // variables
    let departmentsId = [];
    let url = "http://localhost:8000/departamentos";
    const apiInfo = document.getElementById("apiInfo");
    const selectDepartment = document.getElementById("selectDepartment");
    const selectCity = document.getElementById("selectCity");
    const apiDepartment = () => {
        destination = fetch(url)
            .then((res) => res.json())
            .then((data) => {
                data.forEach((smallData) => {
                    console.log(smallData);
                    selectDepartment.innerHTML += `<option value="${smallData.id}">${smallData.name}</option>`;
                });
            });
    };
    apiDepartment();
    selectDepartment.addEventListener("change", function updateDepartment() {
        selectCity.innerHTML = '';
        idD = selectDepartment.value;
        let cities = ""
        fetch(url + '/' + idD)
            .then((res) => res.json())
            .then((data) => {
                data.forEach((smallData) => {
                    selectCity.innerHTML += `<option value="${smallData.id}">${smallData.name}</option>`;
                    console.log(smallData);
                });
            });
    });
</script>