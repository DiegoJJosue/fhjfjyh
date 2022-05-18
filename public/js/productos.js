
	const validar=()=>{
		const pro_nombre=document.querySelector("#pro_nombre");
		if(pro_nombre.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}

	}
