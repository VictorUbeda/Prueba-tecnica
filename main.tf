# main.tf

provider "aws" {
  region = "eu-west-3" # Reemplazar con la región deseada
  access_key = "***"
  secret_key = "***"
}

resource "aws_instance" "wordpress" {
  ami           = "ami-009d5fce35d17d28c" # Reemplazar con la AMI de Amazon Linux
  instance_type = "t2.micro"

  tags = {
    Name = "wordpress-instance"
  }
}

