<?php

namespace app;

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>]
 * @copyright Copyright (c) 2024, Isi
 */
class Helpers
{
    /**
     * Formata o valor inserido para moeda (Real: R$ 1.000,00)
     * 
     * @param float $valor valor a ser formatado, caso não seja informado será definido como 0.
     * @return string
     */
    public static function formataMoeda(float $valor = 0.0): string {
        return 'R$ ' . number_format($valor, 2, ',', '.');
    }

    /**
     * Remove qualquer caracteres não numéricos
     * 
     * @param string $valor sentença de caracteres que será sanitizada.
     * @return string
     */
    public static function sanitizaNumero(string $valor): string {
        return preg_replace('/[^0-9]/', '', $valor);
    }

    /**
     * Método alusivo, realiza uma simples verificação no tamanho da sentença caracteres enviados.
     * 
     * @param string $cpf número de CPF para ser verificado, pode ser enviado com ou sem os pontos e o traço.
     * @return bool
     */
    public static function verificaCPF(string $cpf): bool {
        if (strlen(self::sanitizaNumero($cpf)) != 11) // para chamar um método estático dentro da própria classe não se utiliza a referência ao objeto atual '$this', e sim a resolução de escopo de classe 'self::'.
            return false;
        return true;
    }
}