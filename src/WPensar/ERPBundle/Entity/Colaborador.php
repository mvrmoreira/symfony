<?php

namespace WPensar\ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Colaborador
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WPensar\ERPBundle\Entity\ColaboradorRepository")
 */
class Colaborador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
	 * 
	 * @Assert\NotBlank()
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="string", length=30)
	 * 
	 * @Assert\NotBlank()
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=14, nullable=true)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=50, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="orgao_expedidor", type="string", length=50, nullable=true)
     */
    private $orgaoExpedidor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_emissao", type="date", nullable=true)
     */
    private $dataEmissao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="sexo", type="string", length=10, nullable=true)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_civil", type="string", length=30, nullable=true)
     */
    private $estadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=14, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=14, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Colaborador
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Colaborador
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    
        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set situacao
     *
     * @param string $situacao
     * @return Colaborador
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    
        return $this;
    }

    /**
     * Get situacao
     *
     * @return string 
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     * @return Colaborador
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    
        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set rg
     *
     * @param string $rg
     * @return Colaborador
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    
        return $this;
    }

    /**
     * Get rg
     *
     * @return string 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set orgaoExpedidor
     *
     * @param string $orgaoExpedidor
     * @return Colaborador
     */
    public function setOrgaoExpedidor($orgaoExpedidor)
    {
        $this->orgaoExpedidor = $orgaoExpedidor;
    
        return $this;
    }

    /**
     * Get orgaoExpedidor
     *
     * @return string 
     */
    public function getOrgaoExpedidor()
    {
        return $this->orgaoExpedidor;
    }

    /**
     * Set dataEmissao
     *
     * @param \DateTime $dataEmissao
     * @return Colaborador
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    
        return $this;
    }

    /**
     * Get dataEmissao
     *
     * @return \DateTime 
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     * @return Colaborador
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    
        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return \DateTime 
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set sexo
     *
     * @param integer $sexo
     * @return Colaborador
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    
        return $this;
    }

    /**
     * Get sexo
     *
     * @return integer 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     * @return Colaborador
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    
        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Colaborador
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    
        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return Colaborador
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    
        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Colaborador
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
