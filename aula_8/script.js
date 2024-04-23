const formulario = document.getElementById('formulario')
const entrada = document.getElementById('entrada')
const tarefas = document.getElementById('tarefas')

const cache = JSON.parse(localStorage.getItem('tarefas'))

if (cache) {
    cache.forEach((CACHE) => {
        adicionar_tarefa(CACHE)
    });
}

formulario.addEventListener('submit', (e) => {
    e.preventDefault()
    console.log(e)

    adicionar_tarefa()

})

function adicionar_tarefa(tarefa){
    let tarefa_entrada = entrada.value

    if(tarefa) {
        tarefa_entrada = tarefa.text
    }

    if(tarefa_entrada){
        const elemento_tarefa = document.createElement('li')
        if(tarefa && tarefa.completed){
            elemento_tarefa.classList.add('completada')
        }
        elemento_tarefa.innerText = tarefa_entrada
        tarefas.appendChild(elemento_tarefa)

        elemento_tarefa.addEventListener('click', () =>{
            elemento_tarefa.classList.toggle('completada')
            atualizar_local_storage()
        })
        elemento_tarefa.addEventListener('contextmenu', (e) =>{
            e.preventDefault()
            elemento_tarefa.remove()
            atualizar_local_storage()
        })
        entrada.value = ''
        atualizar_local_storage()
    }
}

function atualizar_local_storage() {
    const itens_tarefas = document.querySelectorAll('li')
    const tarefas = []
    itens_tarefas.forEach((elemento) => {
        tarefas.push({
            text: elemento.innerText,
            completed: elemento.classList.contains('completada')
        })
    })
    localStorage.setItem('tarefas', JSON.stringify(tarefas))
}