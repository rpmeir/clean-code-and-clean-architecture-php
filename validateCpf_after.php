<?php

const VALID_LENGTH = 11;
const ELEVEN_MODULE = 11;
const FIRST_INDEX = 0;

function letOnlyNumbers(cpf) {
	return cpf.replace(/\D/g, '');
}

function hasInvalidLength(cpf) {
	return cpf.length !== VALID_LENGTH;
}

function areAllDigitsEqual(cpf) {
	return cpf.split("").every(current => current === cpf[FIRST_INDEX]);
}

function getCheckDigit(cpf) {
	let sum = 0;
	let rightToLeftPosition = 2;
	for(let lastIndex = (cpf.length - 1); lastIndex >= FIRST_INDEX; lastIndex--) {
		sum += parseInt(cpf[lastIndex]) * rightToLeftPosition++;
	}
	let module = sum % ELEVEN_MODULE;
	return ELEVEN_MODULE - (module < 2 ? ELEVEN_MODULE : module);
}

function validateCpf(cpf) {
	if(!cpf) return false;
	cpf = letOnlyNumbers(cpf);
	if (hasInvalidLength(cpf)) return false;
	if (areAllDigitsEqual(cpf)) return false;
	let tempCpf = cpf.substring(0,9);
	tempCpf = tempCpf.concat(getCheckDigit(tempCpf));
	tempCpf = tempCpf.concat(getCheckDigit(tempCpf));
	return cpf == tempCpf;
}

module.exports = {
	validateCpf
};