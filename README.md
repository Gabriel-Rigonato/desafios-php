# Desafios PHP

**Descrição:** Exercicios de PHP

## Índice

* **Instalação**
* **Informações**

## Instalação

1. Certifique-se de ter o Docker Engine executando em sua maquina local:

2. Execute o comando para gerar uma nova imagem:
   ```bash
   docker build -t desafiosphp .
   
3. Execute o comando para criar um container:
   ```bash
   docker run --rm -d -p 8080:80 desafiosphp


## Informações

1. Quando executar o projeto na porta 8080, será direcionado a pasta raiz, onde poderá escolher qual desafio quer executar primeiro.

2. Quando acessar determinado projeto, para trocar é só alterar o número de 1 a 7 na url.

3. Caso queira acessar um desafio direto é só utilizar a url : localhost:8080/desafio(número do desafio que gostaria de acessar de 1 a 7).

      