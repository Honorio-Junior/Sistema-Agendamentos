const labelEmail = document.querySelector("#label-email")
const labelPassw = document.querySelector("#label-password")
const inputEmail = document.querySelector("#email")
const inputPassw = document.querySelector("#password")

inputEmail.addEventListener("focus", () => {
	labelEmail.style.fontSize = "1rem"
})
inputPassw.addEventListener("focus", () => {
	labelPassw.style.fontSize = "1rem"
})

inputEmail.addEventListener("blur", () => {
	labelEmail.style.fontSize = "0.9rem"
})
inputPassw.addEventListener("blur", () => {
	labelPassw.style.fontSize = "0.9rem"
})
