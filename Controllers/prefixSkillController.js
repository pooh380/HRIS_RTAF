function getPosition(){

    var orgTypeId = $('#orgTypeList :selected').val();
    $("#orgTypeId").val(orgTypeId);

    var orgList = $('#orgList :selected').val();
    $("#orgList").val(orgList);

    var personTypeList = $('#personTypeList :selected').val();
    $("#personTypeList").val(personTypeList);

    alert(orgTypeId+orgList+personTypeList);
}