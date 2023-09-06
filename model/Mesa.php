<?php
    class Mesa {
        private $idMesa;
        private $valor;
        private $status;

        /**
         * Get the value of idMesa
         */ 
        public function getIdMesa()
        {
                return $this->idMesa;
        }

        /**
         * Set the value of idMesa
         *
         * @return  self
         */ 
        public function setIdMesa($idMesa)
        {
                $this->idMesa = $idMesa;

                return $this;
        }

        /**
         * Get the value of valor
         */ 
        public function getValor()
        {
                return $this->valor;
        }

        /**
         * Set the value of valor
         *
         * @return  self
         */ 
        public function setValor($valor)
        {
                $this->valor = $valor;

                return $this;
        }

        /**
         * Get the value of status
         */ 
        public function getStatus()
        {
                return $this->status;
        }

        /**
         * Set the value of status
         *
         * @return  self
         */ 
        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }
    }
?>