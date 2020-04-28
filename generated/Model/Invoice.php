<?php

namespace Limestone\SDK\Model;

class Invoice
{
    /**
     * The id of the invoice
     *
     * @var string
     */
    protected $id;
    /**
     * The timestamp of the invoice
     *
     * @var string
     */
    protected $timestamp;
    /**
     * The type of invoice (Credit, Debit)
     *
     * @var string
     */
    protected $type;
    /**
     * The status
     *
     * @var string
     */
    protected $status;
    /**
     * The description
     *
     * @var string
     */
    protected $description;
    /**
     * The total amount of the invoice
     *
     * @var string
     */
    protected $amount;
    /**
     * The package associated with the invoice
     *
     * @var string
     */
    protected $forpackage;
    /**
     * The invoice associated with the invoice in the case of a Credit
     *
     * @var string
     */
    protected $forinvoice;
    /**
     * The id of the invoice
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The id of the invoice
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The timestamp of the invoice
     *
     * @return string|null
     */
    public function getTimestamp() : ?string
    {
        return $this->timestamp;
    }
    /**
     * The timestamp of the invoice
     *
     * @param string|null $timestamp
     *
     * @return self
     */
    public function setTimestamp(?string $timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * The type of invoice (Credit, Debit)
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type of invoice (Credit, Debit)
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The status
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The description
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * The total amount of the invoice
     *
     * @return string|null
     */
    public function getAmount() : ?string
    {
        return $this->amount;
    }
    /**
     * The total amount of the invoice
     *
     * @param string|null $amount
     *
     * @return self
     */
    public function setAmount(?string $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * The package associated with the invoice
     *
     * @return string|null
     */
    public function getForpackage() : ?string
    {
        return $this->forpackage;
    }
    /**
     * The package associated with the invoice
     *
     * @param string|null $forpackage
     *
     * @return self
     */
    public function setForpackage(?string $forpackage) : self
    {
        $this->forpackage = $forpackage;
        return $this;
    }
    /**
     * The invoice associated with the invoice in the case of a Credit
     *
     * @return string|null
     */
    public function getForinvoice() : ?string
    {
        return $this->forinvoice;
    }
    /**
     * The invoice associated with the invoice in the case of a Credit
     *
     * @param string|null $forinvoice
     *
     * @return self
     */
    public function setForinvoice(?string $forinvoice) : self
    {
        $this->forinvoice = $forinvoice;
        return $this;
    }
}