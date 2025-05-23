package com.example.lib

class MyClass {

}
fun main(){
    println("Hello Kotlin!")
    print("Ola mundo\n")
    print("teste de quebra de linha\n")
    var nome = "Gustavo" //valor mutavel
    val name = "Reggi" //valor não mutavel - imutavel
    println("Nome: $nome \nSobrenome: $name")
    println("\n\n")

    var nome1:String
    nome1 = "gustavo"

    var age: Int
    age = 17

    val pi: Double = 3.14

    println("Nome: $nome1")
    println("Idade: $age")
    println("Valor de pi a ser usado: $pi\n\n")

    println("Que dia é hoje? ")

    var opcao: Int?
    while( int != 0) {
        var alunos = mutableListOf<String>()
        var opcao: Int?

        println("\n===== MENU =====")
        println("1 - Cadastrar aluno")
        println("2 - Listar alunos")
        println("3 - Buscar aluno")
        println("4 - Remover aluno")
        println("0 - Sair")
        print("Escolha uma opção: ")

        val input = readLine()
        opcao = input?.toIntOrNull()

        when (opcao) {
            1 -> {
                println("Primeira opção")
                var nome = readLine()
                if (!nome.isNullOrBlank()) {
                    alunos.add(nome)
                } else {
                    print("Nome invalido")
                }
            }

            2 -> {
                for (item in alunos) {
                    println("Nome: $item")
                }

            }

            3 -> {
                var busca = readLine()

                alunos.contains(busca)
            }

            4 -> {
                var remov: String
                remov = readLine()!!.toString()
                alunos.remove(remov)
                for (item in alunos) {
                    println("Nome: $item")
                }

            }
        }
    }











}

