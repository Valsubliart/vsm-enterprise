#!/bin/bash

# ==========================================
# VSM Enterprise - Commit Automático
# ==========================================

if [ -z "$1" ]; then
    echo "Uso:"
    echo "./scripts/commit.sh \"mensagem do commit\""
    exit 1
fi

echo ""
echo "===================================="
echo " VSM Enterprise - Git Commit"
echo "===================================="

echo ""
echo ">> Git Status"
git status

echo ""
echo ">> Git Add"
git add .

echo ""
echo ">> Git Commit"
git commit -m "$1"

echo ""
echo ">> Git Push"
git push origin main

echo ""
echo "===================================="
echo " Commit enviado com sucesso!"
echo "===================================="
