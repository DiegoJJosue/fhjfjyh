
	const validar=()=>{
		const users=document.querySelector("#users");
		if(users.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}

		const use_apellido=document.querySelector("#use_apellido");
		if(use_apellido.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}		


		const use_cedula=document.querySelector("#use_cedula");
		if(use_cedula.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}


		const use_telefono=document.querySelector("#use_telefono");
		if(use_telefono.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}


		const email=document.querySelector("#email");
		if(email.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}



		const password=document.querySelector("#password");
		if(password.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}


	}
