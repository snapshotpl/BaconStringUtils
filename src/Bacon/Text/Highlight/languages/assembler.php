<?php
/**
 * Bacon.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
return array(
    'description' => 'Assembler',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'aaa', 'aad', 'aam', 'aas', 'adc', 'add', 'and', 'arpl',
                'bound', 'bsf', 'bsr', 'bswap', 'bt', 'btc', 'btr', 'bts',
                'call', 'cbw', 'cdq', 'clc', 'cld', 'cli', 'clts', 'cmc', 'cmp',
                'cmps', 'cmpsb', 'cmpsd', 'cmpsw', 'cmpxchg', 'cwd', 'cwde',
                'daa', 'das', 'dec', 'div', 'enter', 'esc', 'f2xm1', 'fabs',
                'fadd', 'faddp', 'fbld', 'fbstp', 'fchs', 'fclex', 'fcom',
                'fcomp', 'fcompp', 'fcos', 'fdecstp', 'fdisi', 'fdiv', 'fdivp',
                'fdivr', 'fdivrp', 'feni', 'ffree', 'fiadd', 'ficom', 'ficomp',
                'fidiv', 'fidivr', 'fild', 'fimul', 'fincstp', 'finit', 'fist',
                'fistp', 'fisub', 'fisubr', 'fld', 'fld1', 'fldcw', 'fldenv',
                'fldl2e', 'fldl2t', 'fldlg2', 'fldln2', 'fldpi', 'fldz', 'fmul',
                'fmulp', 'fnclex', 'fndisi', 'fneni', 'fninit', 'fnop',
                'fnsave', 'fnstcw', 'fnstenv', 'fnstsw', 'fpatan', 'fprem',
                'fprem1', 'fptan', 'frndint', 'frstor', 'fsave', 'fscale',
                'fsetpm', 'fsin', 'fsincos', 'fsqrt', 'fst', 'fstcw', 'fstenv',
                'fstp', 'fstsw', 'fsub', 'fsubp', 'fsubr', 'fsubrp', 'ftst',
                'fucom', 'fucomp', 'fucompp', 'fwait', 'fxam', 'fxch',
                'fxtract', 'fyl2x', 'fyl2xp1', 'hlt', 'idiv', 'imul', 'in',
                'inc', 'insb', 'insd', 'insw', 'int', 'into', 'invd', 'invlpg',
                'iret', 'iretd', 'ja', 'jae', 'jb', 'jbe', 'jc', 'jcxz', 'je',
                'jecxz', 'jg', 'jge', 'jl', 'jle', 'jmp', 'jna', 'jnae', 'jnb',
                'jnbe', '', 'jnc', 'jne', 'jng', 'jnge', 'jnl', 'jnle', 'jno',
                'jnp', 'jns', 'jnz', 'jo', 'jp', 'jpe', 'jpo', 'js', 'jz',
                'lahf', 'lar', 'lds', 'lea', 'leave', 'les', 'lfs', 'lgdt',
                'lgs', 'lidt', 'lldt', 'lmsw', 'lock', 'lods', 'lodsb', 'lodsd',
                'lodsw', 'loop', 'loopd', 'loopde', 'loopdne', 'loopdnz',
                'loopdz', 'loope', 'loopne', 'loopnz', 'loopz', 'lsl', 'lss',
                'ltr', 'mov', 'movs', 'movsb', 'movsd', 'movsw', 'movsx',
                'movzx', 'mul', 'neg', 'nop', 'not', 'or', 'out', 'outsb',
                'outsd', 'outsw', 'pop', 'popa', 'popad', 'popf', 'popfd',
                'push', 'pusha', 'pushad', 'pushf', 'pushfd', 'rcl', 'rcr',
                'rep', 'repe', 'repne', 'repnz', 'repz', 'ret', 'retf', 'retn',
                'rol', 'ror', 'sahf', 'sal', 'sar', 'sbb', 'scas', 'scasb',
                'scasd', 'scasw', 'segcs', 'segds', 'seges', 'segfs', 'seggs',
                'segss', 'seta', 'setae', 'setb', 'setbe', 'setc', 'sete',
                'setg', 'setge', 'setl', 'setle', 'setna', 'setnae', 'setnb',
                'setnbe', 'setnc', 'setne', 'setng', 'setnge', 'setnl',
                'setnle', 'setno', 'setnp', 'setns', 'setnz', 'seto', 'setp',
                'setpe', 'setpo', 'sets', 'setz', 'sgdt', 'shl', 'shld', 'shr',
                'shrd', 'sidt', 'sldt', 'smsw', 'stc', 'std', 'sti', 'stos',
                'stosb', 'stosd', 'stosw', 'str', 'sub', 'test', 'verr', 'verw',
                'wait', 'wbinvd', 'xadd', 'xchg', 'xlat', 'xor', 'assume',
                'omment', 'db', 'dd', 'dq', 'dt', 'dw', 'end', 'endm', 'endp',
                'ends', 'eq', 'equ', 'exitm', 'ex', 'trn', 'far', 'ge', 'group',
                'gt', 'include', 'label', 'large', 'le', 'length', 'local',
                'lt', 'macro', 'mask', 'name', 'near', 'org', 'page', 'proc',
                'public', 'purge', 'record', 'rept', 'seg', 'segment', 'short',
                'size', 'small', 'struc', 'subttl', 'symtype', 'this', 'title',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'ah', 'al', 'and', 'ax', 'bh', 'bl', 'bp', 'bx', 'byte', 'ch',
                'cl', 'cs', 'cx', 'dh', 'di', 'dl', 'ds', 'dword', 'dx', 'eax',
                'ebp', 'ebx', 'ecx', 'edi', 'edx', 'eip', 'es', 'esi', 'esp',
                'fs', 'gs', 'high', 'low', 'mod', 'not', 'offset', 'or', 'ptr',
                'qword', 'shl', 'shr', 'si', 'sp', 'ss', 'st', 'tbyte', 'type',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '^\\w+\\:',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => ';',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\{',
                'close' => '\\}',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'digits' => '(?:0x|0X)[0-9a-fA-F]+|\\d*[\\.\\_]?\\d+(?:[eE][\\-\\+]\\d+)?[hHlLuU]*',
    'operators' => '\\(|\\)|\\[|\\]|\\,|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\@',
    'ignore_case' => true,
);