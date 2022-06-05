let form = document.querySelector('form')
let todo = document.querySelector('form input')
let todos = document.querySelector('.todos')

const getTodos = () => {
	let xhr = new XMLHttpRequest()

	xhr.open('get', 'actions/select.php')
	xhr.send()
	xhr.onload = () => {
		todos.innerHTML = xhr.responseText

		let deleteBtns = todos.querySelectorAll('.todo button')

		deleteBtns.forEach(deleteBtn => {
			deleteBtn.addEventListener('click', e => {
				deleteTodo(deleteBtn)
			})
		})
	}
}

const sendTodo = x => {
	let xhr = new XMLHttpRequest()

	xhr.open('get', 'actions/insert.php?todo=' + x.value)
	xhr.send()
	xhr.onload = () => {
		x.value = ''
		getTodos()
	}
}

const deleteTodo = x => {
	let xhr = new XMLHttpRequest()

	xhr.open('get', 'actions/delete.php?id=' + x.id)
	xhr.send()
	xhr.onload = () => {
		getTodos()
	}
}

form.addEventListener('submit', e => {
	e.preventDefault()

	console.log(todo.value)

	if (todo.value.length != 0) {
		sendTodo(todo)
	}
})

window.addEventListener('load', getTodos)
