//inicio Firebase
var config = {
  apiKey: "AIzaSyAnGQf_Pta2fjIloODDOrCZhXpq4TREmzM",
  authDomain: "ecommerce-5e052.firebaseapp.com",
  databaseURL: "https://ecommerce-5e052.firebaseio.com",
  projectId: "ecommerce-5e052",
  storageBucket: "ecommerce-5e052.appspot.com",
  messagingSenderId: "97634288002"
};
firebase.initializeApp(config);

const txtEmail = document.getElementById('correo');
const txtPassword = document.getElementById('pass');
const btnLogin = document.getElementById('login');
btnLogin.addEventListener('click', e => {
	const email = txtEmail.value;
	const pass = txtPassword.value;
	const auth = firebase.auth();

	const promesa = auth.signInWithEmailAndPassword(email,pass);
	promesa.catch(e => location.href = "admin/errorLogin.php");

});


firebase.auth().onAuthStateChanged(firebaseUser => {
	if (firebaseUser) {
			location.href="admin";
		}
});