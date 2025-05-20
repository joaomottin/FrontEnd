public class Pessoa {
    private String nome;
    private Endereco endereco;

    public Pessoa(String nome, String rua, String cidade) {
        this.nome = nome;
        this.endereco = new Endereco(rua, cidade);
    }

    public void exibirInformacoes() {
        System.out.println("Nome: " + nome);
        endereco.exibirEndereco();
    }

}

// Classe interna
private class Endereco {
    private String rua;
    private String cidade;

    public Endereco(String rua, String cidade) {
        this.rua = rua;
        this.cidade = cidade;
    }

    public void exibirEndereco() {
        System.out.println("Endereço: " + rua + ", " + cidade);
    }
}


public class Cadastro {
    public static void main(String[] args) {
        Pessoa p = new Pessoa("Maria", "Rua das Flores", "São Paulo");
        p.exibirInformacoes();
    }
}
