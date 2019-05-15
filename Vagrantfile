# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/bionic64"

  config.vm.network "forwarded_port", guest: 8000, host: 8000

  config.vm.network :private_network, ip: "192.168.58.123"

  config.vm.synced_folder "./", "/vagrant"

  config.vm.provider :virtualbox do |vb|
    vb.customize [
      'modifyvm', :id,
      '--memory', '2048',
      '--cpus', '2'
    ]
  end

  config.vm.provision "shell", path: "vagrant/provision-privileged.sh"
  config.vm.provision "shell", path: "vagrant/provision-non-privileged.sh", privileged: false
  config.vm.provision "shell", path: "vagrant/run.sh", run: "always"
end
