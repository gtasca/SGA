<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 28/09/2018
 * Time: 19:36
 */

class Avaliacoes
{
    private $idAvalicao;
    private $cursoIdCurso;
    private $turmaIdTurma;
    private $alunoIdAluno;
    private $nota1;
    private $nota2;
    private $notaFinal;

    /**
     * Avaliacoes constructor.
     * @param $idAvalicao
     * @param $cursoIdCurso
     * @param $turmaIdTurma
     * @param $alunoIdAluno
     * @param $nota1
     * @param $nota2
     * @param $notaFinal
     */
    public function __construct($idAvalicao, $cursoIdCurso, $turmaIdTurma, $alunoIdAluno, $nota1, $nota2, $notaFinal)
    {
        $this->idAvalicao = $idAvalicao;
        $this->cursoIdCurso = $cursoIdCurso;
        $this->turmaIdTurma = $turmaIdTurma;
        $this->alunoIdAluno = $alunoIdAluno;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->notaFinal = $notaFinal;
    }

    /**
     * @return mixed
     */
    public function getIdAvalicao()
    {
        return $this->idAvalicao;
    }

    /**
     * @param mixed $idAvalicao
     */
    public function setIdAvalicao($idAvalicao)
    {
        $this->idAvalicao = $idAvalicao;
    }

    /**
     * @return mixed
     */
    public function getCursoIdCurso()
    {
        return $this->cursoIdCurso;
    }

    /**
     * @param mixed $cursoIdCurso
     */
    public function setCursoIdCurso($cursoIdCurso)
    {
        $this->cursoIdCurso = $cursoIdCurso;
    }

    /**
     * @return mixed
     */
    public function getTurmaIdTurma()
    {
        return $this->turmaIdTurma;
    }

    /**
     * @param mixed $turmaIdTurma
     */
    public function setTurmaIdTurma($turmaIdTurma)
    {
        $this->turmaIdTurma = $turmaIdTurma;
    }

    /**
     * @return mixed
     */
    public function getAlunoIdAluno()
    {
        return $this->alunoIdAluno;
    }

    /**
     * @param mixed $alunoIdAluno
     */
    public function setAlunoIdAluno($alunoIdAluno)
    {
        $this->alunoIdAluno = $alunoIdAluno;
    }

    /**
     * @return mixed
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * @param mixed $nota1
     */
    public function setNota1($nota1)
    {
        $this->nota1 = $nota1;
    }

    /**
     * @return mixed
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * @param mixed $nota2
     */
    public function setNota2($nota2)
    {
        $this->nota2 = $nota2;
    }

    /**
     * @return mixed
     */
    public function getNotaFinal()
    {
        return $this->notaFinal;
    }

    /**
     * @param mixed $notaFinal
     */
    public function setNotaFinal($notaFinal)
    {
        $this->notaFinal = $notaFinal;
    }



}