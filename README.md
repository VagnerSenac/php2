# php2
 Revisão comandos básicos PHP

 - Operadores Lógicos
 - Estrutura de Decisão
   - IF
    - Switch
    - Ternário
 - Estrutura de Repetição   
  - While

- Atividades


# Operadores Lógicos
- Operadores lógicos são:
     && (And oui E) - se apenas uma expressão dor falsa o resultado será falso.
     || (OR ou OU) - uma expressão precisa ser verdadeira para o resultado ser verdadeiro.
     ! (NOT ou Não) - inverte o resultado, se for verdadeira, o resultado vira falso.

# Operadores Relacionais

>    maior
<    menor
>=   maior igual
<=   menor igual
!=   diferente
==   igual

# Estrutura de decisão

## IF
- quando vc precisa que seu código tome alguma decisão baseado em uma ou mais condições.

### Sintaxe:

if(condição){
    resposta verdadeira
}else{
    resposta falsa
}

### IF Composto 
if(condição){
    resposta 1
}else if(condição) {
    resposta 2
}else{
    resposta 3
}

### TERNÁRIO

echo (condição) ? resposta verdadeira : resposta falsa;

###  SWITCH
## SINTAXE

switch(variável){
    case valor:
        código;
        break;
    case valor:
        código;
        break;
    default:
        código;
        break;
}

# Estrutura de repetição

# while - enquanto
 - Será executado o laço  enquanto a condição for verdadeira
# sintaxe

while(condição){
    código;
}