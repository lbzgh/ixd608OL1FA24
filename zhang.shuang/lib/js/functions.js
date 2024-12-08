// Front-end Option to get data from the Back-end
const query = (options) => {
	return fetch('data/api.php',{
		method:'POST',
		body: JSON.stringify(options),
		headers:{'Content-Type':'application/json'}
	}).then(d=>d.json());
}


const templater = f => a =>
	(Array.isArray(a)?a:[a])
	.reduce((r,o,i,a)=>r+f(o,i,a),'');  
	// r is the reducing value; o is the current object when looping through; 
	// i is the index of the current object in the array; a is the array being looped.

	