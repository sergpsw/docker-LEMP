Vagrant.configure("2") do |config|

  config.vm.define "web3" do |web3|
    web3.vm.box = "ubuntu/bionic64"
    web3.vm.hostname = "dockwebserv"
    web3.vm.network "private_network", ip: "192.168.88.83"
   
    web3.vm.provider "virtualbox" do |vb|
      vb.name = "webserv_d"
      vb.cpus = 1
      vb.memory = "1024"
    end
    
    web3.vm.synced_folder "./", "/var/www/vagrant"

    web3.vm.provision "shell", path: "script.sh"

    web3.vm.provision "ansible_local" do |ansible|
      ansible.playbook = "myplaybook.yml"
      ansible.extra_vars = { ansible_python_interpreter:"/usr/bin/python3" }
    end

  end

end
