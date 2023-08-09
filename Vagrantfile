# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.

Vagrant.configure("2") do |config|

	config.vm.boot_timeout = 1800
	config.ssh.insert_key = true
  
	SERVER_IP = "192.168.56.110"
	SERVER_NAME = "suahnS"
  
	config.vm.define "#{SERVER_NAME}" do |server|
	  server.vm.box = "ubuntu/focal64"
	  server.vm.hostname = "#{SERVER_NAME}"
	  server.vm.network "private_network", ip: "#{SERVER_IP}"
	  server.vm.provider "virtualbox" do |vb|
		vb.memory = "2048"
		vb.cpus = 2
	  end
	end
  
  end
  